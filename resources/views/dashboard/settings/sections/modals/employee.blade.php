<form action="" class="form">
    <div class="modal-body">
        <div class="modal-body">

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search" aria-hidden="true"></i>
                    </span>
                </div>
                <input type="text" class="form-control filter-by" data-filter=".user-name" data-li=".list-employers-item" data-target="#listEmployers" placeholder="Filtrar por nombre" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <ul class="list-group list-employers filter-basic"  id="listEmployers" >
                @php $randomNumber = rand(10, 50); @endphp
                @foreach( range(1,$randomNumber) as $item )
                @php
                    $faker = \Faker\Factory::create();
                    $firstName = $faker->firstName;
                    $lastName = $faker->lastName;
                @endphp
                <li class="list-group-item list-group-item-action list-employers-item">
                    <div class="row d-flex align-content-center justify-content-center">
                        <div class="col-8 col-lg-9 d-flex align-items-center align-self-center ">
                            <img class="rounded-circle thumb m-2"  src="https://randomuser.me/api/portraits/men/44.jpg">
                            <div class="text-left user-name">{{ $firstName }} {{ $lastName }}</div>
                        </div>
                        <div class="col-4 col-lg-3 d-flex align-items-center justify-content-center">
                            <div class="ml-auto">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="employee_{{ $loop->index }}">
                                    <label class="custom-control-label" for="employee_{{ $loop->index }}"></label>
                                  </div>
                            </div>
                            {{--
                            <div class="btn-group-toggle ml-auto" data-toggle="buttons">
                                <label class="btn btn-secondary">
                                    <input type="checkbox" autocomplete="off"> Seleccionar
                                </label>
                            </div>
                            --}}
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

        </div>
    </div>

    <div class="modal-footer">
        <button class="btn btn-secondary " type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="#">Vincular</a>
    </div>
</form>
