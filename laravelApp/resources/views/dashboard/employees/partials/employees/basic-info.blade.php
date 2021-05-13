<div class="list-employees--form_basic-info--box">
    <img src="{{ asset('img/employeer.png') }}" class="list-employees--form_basic-info--photo responsive-img">
    <div class="list-employees--form_basic-info--data">

        <p>
            <div class="fullname">NOMBRE y APELLIDO</div>
            <div class="position">Web Developer</div>
        </p>
        <p>
            <a href="mailto:nombre@tam.com" >nombre@tam.com</a>
        </p>

        <p>
            <a href="tel:685 999 887" >685 999 887</a>
        </p>

        <ul class="social-network">
            <li class="social-network--item">
                <a href="#" class="social-network--item_icon facebook"></a>
            </li>
            <li class="social-network--item">
                <a href="#" class="social-network--item_icon twitter"></a>
            </li>
        </ul>
        <a href="#" class="btn-close"
                    data-target="#employeer_form_{{ $loop->iteration }}"
                    data-section="basic-info">
            <img src="{{ asset('img/icons/white/arrow-down.svg') }}" alt="">
        </a>
    </div>
</div>
