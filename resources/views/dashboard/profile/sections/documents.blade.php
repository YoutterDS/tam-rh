{{--FORM @lang('nav-pills.profile-documents')--}}

<form action="">
    <h5>Subir documento</h5>

    <div class="form-row mb-lg-2 mb-md-2 mb-sm-2">
        <div class="col-lg-5 col-md-5 col-sm-5">
            <label for="user_name">Nombre del documento</label>
            <input type="text" class="form-control" id="user_name" value="" placeholder="Nombre..." required>
            <div class="valid-feedback">Valor aceptado!</div>
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7">
            <label for="user_name">Archivo</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                </div>
                <div class="custom-file">
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Seleccionar archivo</label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">SUBIR</button>
    </div>
</form>

<div class="mb-lg-2 mb-md-2 mb-sm-2 row">
    <?php
    for($i=0;$i<4;$i++){
    echo '
    <div class="col-lg-4 col-md-6 col-sm-12 mb-sm-2">
        <div class="list-group ">
            <a href="#" class="list-group-item list-group-item-action">
                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center  align-self-center">
                        <button class="btn btn-primary mr-2">VISUALIZAR</button>
                        <button class="btn btn-danger mr-2">ELIMINAR</button>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center  align-self-center">
                        @php
                        $faker = \Faker\Factory::create();
                        $firstName = $faker->firstName;
                        $lastName = $faker->lastName;
                        @endphp
                        {{$firstName}} {{$lastName}} {{$firstName}} {{$lastName}}
                    </div>
                </div>
            </a>
        </div>
    </div>
    ';
    }
    ?>
</div>
<div class="list-group ">
    <div class="row">
        @foreach(range(0,5) as $item)
            <div class="col-lg-4 col-md-6 col-sm-12  mb-2">
                <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-lg-7 d-flex align-items-center align-self-center">
                            <button class="btn btn-primary mr-2">VISUALIZAR</button>
                            <button class="btn btn-danger mr-2">ELIMINAR</button>
                        </div>

                        <div class="col-lg-5 d-flex align-items-center  align-self-center">
                            @php
                            $faker = \Faker\Factory::create();
                            $firstName = $faker->firstName;
                            $lastName = $faker->lastName;
                            @endphp
                            {{$firstName}} {{$lastName}} {{$firstName}} {{$lastName}}
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
