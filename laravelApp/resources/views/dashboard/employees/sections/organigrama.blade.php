<div class="col-6 col-lg-12 d-flex justify-content-end">
    <form action="" class="form col-3">
        <div class="form-group">
            <select class="form-control selectpicker" id="office"
                data-width="100%"
                data-size="8"
                data-dropup-auto="false"
                data-live-search="false"
                data-live-search-placeholder="@lang('main.filter-by-name')"
                data-live-search-style='startsWith'
                title="@lang('main.select')">
                    <option selected>@lang('main.select-office')</option>
                    <option value="1">BARCELONA</option>
                    <option value="2">GIRONA</option>
            </select>
        </div>
    </form>
</div>

<div class="list-organizationchart" id="organizationchart-1">
    <div class="row">
        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item" data-id="#organizationchart-1">
                <div class="list-organizationchart--item_color"
                        style="background-color: #F1A674" ></div>
                <div class="list-organizationchart--item_department">DIRECTION</div>
                <div class="list-organizationchart--item_arrow" >
                    <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item ml-4 ml-sm-0 subitem">
                <div class="list-organizationchart--item_img">
                    <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                </div>
                <div class="list-organizationchart--item_employeer">
                    <div class="list-organizationchart--item_employeer-name">
                        {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                    </div>
                    <div class="list-organizationchart--item_employeer-position">Cargo</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            @foreach(range(1,3) as $item)
                <div class="list-organizationchart--item ml-5 ml-sm-0 subitem">
                    <div class="list-organizationchart--item_img">
                        <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                    </div>
                    <div class="list-organizationchart--item_employeer">
                        <div class="list-organizationchart--item_employeer-name">
                            {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                        </div>
                        <div class="list-organizationchart--item_employeer-position">Cargo</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-4">

        </div>

        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item ml-4 ml-sm-0 subitem">
                <div class="list-organizationchart--item_img">
                    <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                </div>
                <div class="list-organizationchart--item_employeer">
                    <div class="list-organizationchart--item_employeer-name">
                        {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                    </div>
                    <div class="list-organizationchart--item_employeer-position">Cargo</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            @foreach(range(1,2) as $item)
                <div class="list-organizationchart--item ml-5 ml-sm-0 subitem">
                    <div class="list-organizationchart--item_img">
                        <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                    </div>
                    <div class="list-organizationchart--item_employeer">
                        <div class="list-organizationchart--item_employeer-name">
                            {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                        </div>
                        <div class="list-organizationchart--item_employeer-position">Cargo</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="list-organizationchart mt-sm-0 mt-md-4" id="organizationchart-2">
    <div class="row">
        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item" data-id="#organizationchart-2">
                <div class="list-organizationchart--item_color"
                        style="background-color: #CCC559" ></div>
                <div class="list-organizationchart--item_department">RRHH</div>
                <div class="list-organizationchart--item_arrow">
                    <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item ml-4 ml-sm-0 subitem">
                <div class="list-organizationchart--item_img">
                    <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                </div>
                <div class="list-organizationchart--item_employeer">
                    <div class="list-organizationchart--item_employeer-name">
                        {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                    </div>
                    <div class="list-organizationchart--item_employeer-position">Cargo</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            @foreach(range(1,5) as $item)
                <div class="list-organizationchart--item ml-5 ml-sm-0 subitem">
                    <div class="list-organizationchart--item_img">
                        <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                    </div>
                    <div class="list-organizationchart--item_employeer">
                        <div class="list-organizationchart--item_employeer-name">
                            {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                        </div>
                        <div class="list-organizationchart--item_employeer-position">Cargo</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-sm-4">

        </div>

        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item ml-4 ml-sm-0 subitem">
                <div class="list-organizationchart--item_img">
                    <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                </div>
                <div class="list-organizationchart--item_employeer">
                    <div class="list-organizationchart--item_employeer-name">
                        {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                    </div>
                    <div class="list-organizationchart--item_employeer-position">Cargo</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            @foreach(range(1,2) as $item)
                <div class="list-organizationchart--item ml-5 ml-sm-0 subitem">
                    <div class="list-organizationchart--item_img">
                        <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                    </div>
                    <div class="list-organizationchart--item_employeer">
                        <div class="list-organizationchart--item_employeer-name">
                            {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                        </div>
                        <div class="list-organizationchart--item_employeer-position">Cargo</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="list-organizationchart mt-sm-0 mt-md-4" id="organizationchart-3">
    <div class="row">
        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item" data-id="#organizationchart-3">
                <div class="list-organizationchart--item_color"
                        style="background-color: #3A6591" ></div>
                <div class="list-organizationchart--item_department">SALES</div>
                <div class="list-organizationchart--item_arrow">
                    <img src="{{ asset('img/icons/arrow-right.svg') }}" alt="">
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            <div class="list-organizationchart--item ml-4 ml-sm-0 subitem">
                <div class="list-organizationchart--item_img">
                    <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                </div>
                <div class="list-organizationchart--item_employeer">
                    <div class="list-organizationchart--item_employeer-name">
                        {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                    </div>
                    <div class="list-organizationchart--item_employeer-position">Cargo</div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-4">
            @foreach(range(1,5) as $item)
                <div class="list-organizationchart--item ml-5 ml-sm-0 subitem">
                    <div class="list-organizationchart--item_img">
                        <img src="{{ asset('img/icons/grey/user-default.svg') }}" alt="">
                    </div>
                    <div class="list-organizationchart--item_employeer">
                        <div class="list-organizationchart--item_employeer-name">
                            {{ \Faker\Factory::create()->firstName}} {{ \Faker\Factory::create()->lastName}}
                        </div>
                        <div class="list-organizationchart--item_employeer-position">Cargo</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
