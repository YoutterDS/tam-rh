<?php

namespace App\Http\Livewire\Settings\Offices;

use App\Models\User;
use App\Models\Office;
use App\Models\Company;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Log;
use Illuminate\Filesystem\Filesystem;

class Index extends Component
{
    use WithFileUploads;

    public $userCanEdit;
    public $dirty;
    public bool $canBeSubmitted = false;
    public $isSaved = false;
    public $edit = false;
    public $action;

    public $office, $office_country_id, $image, $upload_image = 'N', $dir = '../www/app/uploads/offices/';

    public $company, $offices;

    protected $messages = [
        'image.max'                     => 'La imágen no puede superar 1Mb de peso.',
        'office.email.email'            => 'El email proporcionado no parece válido.',
    ];

    public function mount()
    {
        $this->userCanEdit              = User::find(auth()->user()->id)->hasRole(['super-admin', 'admin']);

        $this->successful               = false;
        $this->company                  = Company::find(auth()->user()->company->id);

        $this->offices                  = $this->company->offices()->get();
    }

    public function formHasChanged()
    {
        $this->canBeSubmitted = true;
        $this->isSaved = false;
    }

    public function render()
    {
        $this->offices                  = $this->company->offices()->get();
        return view('livewire.settings.offices.index');
    }

    public function showForm($id, $action = null)
    {

        $this->office = [];
        $this->edit                 = true;
        $this->action               = $action ?? 'edit';

        $this->office               = ($id)? Office::find($id)->toArray() : (new Office())->toArray();
        $this->office_country_id    = $this->office? $this->office['country_id'] : null;
//        $this->image                = null;

        $this->emit('scroll-to-top', $this->office);
    }

    public function hideForm()
    {
        $this->edit = false;
        $this->office = null;
        $this->office = [];
    }

    public function updatedImage()
    {
        $this->validate([
            'image'                 => 'image|max:1024|nullable', // 1MB Max
        ]);
    }

    public function updatedOfficeHeadquarters()
    {
        if( $this->office['headquarters'] ){
            $headquarters                      = $this->company->offices()->where('offices.headquarters', 1)->get();
            $actualOfficeHeadquarters          = $headquarters->first();
            $totalHeadquarters                 = $headquarters->count();

            if( $actualOfficeHeadquarters && $totalHeadquarters > 0 && $actualOfficeHeadquarters->id !== $this->office['id'] ) {
                $this->emit('headquarters-warning', $actualOfficeHeadquarters->name);
            }
        }
    }

    public function edit()
    {
        if( $this->userCanEdit ) {
            $this->validate([
                'image'                         => 'image|max:1024|nullable', // 1MB Max
                'office.name'                   => 'required|min:3',
                'office.address'                => 'required|min:3',
                'office.city'                   => 'required|min:3',
                'office.hours'                  => 'required|min:3',
                'office.phone_number'           => 'required|min:3',
                'office.postal_code'            => 'required|min:3',
                'office.state_province_region'  => 'required|min:3',
                'office.email'                  => 'required|min:3|email',
                'office.country_id'             => 'required',
            ]);

            $office                             = ( isset($this->office['id']) )? Office::find($this->office['id']) : new Office();
            $this->dirty                        = ( isset($this->office['id']) )? Office::find($this->office['id'])->getDirty() : null;

            $office->fill($this->office);
            $office->company_id                 = $this->company->id;

            if( $this->image ) {
                // $this->image->storeAs('/temporal/', $this->image->getClientOriginalName(), $disk = 'offices');
                $office->image                  = $this->image->getClientOriginalName();
            }

            if ( $office->isDirty() ) {
                // Get old image...
                $oldImage                       = $office->getOriginal('image');

                if( $this->action === 'edit' && $this->office['headquarters'] ) {
                    $idsHeadquarters            = $this->company->offices()->where('offices.headquarters', 1)->get()->pluck('id')->toArray();
                    $officesHeadquarters        = Office::whereIn('id', $idsHeadquarters);
                    $officesHeadquarters->update(['headquarters' => 0]);
                }

                $office->save();

                if( $this->image ) {
                    $this->image->storeAs('/' . $office->id . '/', $this->image->getClientOriginalName(), $disk = 'offices');
                    $office->image              = $this->image->getClientOriginalName();

                    // ...and delete
                    $this->deleteResource($office->id, $oldImage);

                    $office->save();

                    $this->image                = null;
                    $this->upload_image         = 'N';
                }

                $this->canBeSubmitted           = false;
                $this->isSaved                  = true;
                $this->action                   = null;

                $this->hideForm();

                $this->emit('successful');
            } else {
                $this->emit('nothing-updated');
            }

        } else {
            $this->emit('user-cannot-edit');
        }
    }

    public function showConfirmDeleteModal($id)
    {
        $this->emit('confirm-delete', $id);
    }

    public function delete($id)
    {
        $office                                 = Office::find($id);

        $imageToDelete                          = $office->image;
        $this->deleteResource($id, $imageToDelete);

        if( $office->delete() ) {
            $this->emit('ok-deleted');
        } else {
            $this->emit('error-on-delete');
        }
    }

    public function deleteResource($idOffice, $imageToDelete)
    {
        $dirToRemove                           = base_path($this->dir . $idOffice);
        $fileToRemove                          = $dirToRemove . '/' . $imageToDelete;
        if( file_exists($fileToRemove) ) {
            if( !is_dir($fileToRemove) ) {
                unlink( $fileToRemove );
            }

            $FileSystem                         = new Filesystem();

            if ( $FileSystem->exists($dirToRemove) ) {
                $files = $FileSystem->files($dirToRemove);

                if (empty($files)) {
                    $FileSystem->deleteDirectory($dirToRemove);
                }
            }
        } else {
            Log::error("ERROR al eliminar la imagen (" . $fileToRemove . ").");
        }
    }
}
