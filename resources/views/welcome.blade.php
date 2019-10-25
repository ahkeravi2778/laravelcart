<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="{{ asset('public/mdb/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/mdb/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/mdb/css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/mdb/css/custom.css') }}">

</head>

<body>

    <div class="sidenav purple-gradient">
        <div class="my-image">
            <img src="{{ asset('public/mdb/img/boy.png') }}" alt="">
        </div>
        {{-- <div class="side-menu">
            <ul class="side-menu-ul">
                <li class="sid-menu-li"><a class="side-menu-a  tab-pane fade show active " href="#" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">MENUS</a></li>
                <li class="sid-menu-li"><a class="side-menu-a " href="#">MENUS</a></li>
                <li class="sid-menu-li"><a class="side-menu-a " href="#">MENUS</a></li>
                <li class="sid-menu-li"><a class="side-menu-a " href="#">MENUS</a></li>
                <li class="sid-menu-li"><a class="side-menu-a " href="#">MENUS</a></li>
                <li class="sid-menu-li"><a class="side-menu-a " href="#">MENUS</a></li>
            </ul>
        </div> --}}
        <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link  tab-pane fade show active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true"> </i>Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false"> </i>Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                        aria-controls="contact" aria-selected="false"> </i>Contact</a>
                </li>
            </ul>

    </div>

    <div class="main  ">
      
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="col">
                    <div class="row">
                        <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, odio! Cumque laboriosam velit sint quae qui reprehenderit unde ducimus earum hic impedit ratione fugit porro, iusto optio similique, eos magnam asperiores laborum suscipit dolores cupiditate? Magnam atque provident nemo deleniti nobis animi similique excepturi, molestias unde officiis omnis nam quo sit est ullam impedit velit recusandae repellendus numquam dolor mollitia saepe accusamus voluptatibus fugiat! A eos veritatis id. Tempore itaque veritatis deserunt magni, eos cum eligendi hic sunt aliquid maiores voluptatem, iusto impedit nihil laborum. Cupiditate, obcaecati in quos, tenetur aliquam itaque atque dicta, quibusdam repudiandae soluta tempora veniam nulla.</div>
                        <div class="col">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque soluta dolorum sint iusto, quasi ut possimus, optio necessitatibus nostrum consequuntur nisi delectus quam odit voluptas id doloribus laboriosam beatae est fuga. Impedit odit illum, ratione, doloribus architecto natus voluptates consectetur illo reiciendis amet, asperiores ipsa dolorum beatae laboriosam? Velit error laboriosam sit cum quod maiores obcaecati exercitationem. Vero culpa dicta hic, corrupti exercitationem quam atque explicabo tempora nulla rem distinctio consectetur fugiat velit aliquid iusto debitis corporis ipsam! Pariatur aliquam explicabo sit necessitatibus, quisquam officia, maiores architecto tempora hic distinctio enim saepe corporis fuga sint neque dolores ratione culpa amet?</div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Food truck fixie
                locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit,
                blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.
                Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum
                PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS
                salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit,
                sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester
                stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park. 
                lorem1000
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">Etsy mixtape
                wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack
                lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard
                locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify
                squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie
                etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog
                stumptown. Pitchfork sustainable tofu synth chambray yr.</div>
        </div>
    </div>
</body>


<script src="{{asset('public/mdb/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{asset('public/mdb/js/bootstrap.min.js') }}"></script>
<script src="{{asset('public/mdb/js/mdb.min.js ') }}"></script>
<script src="{{asset('public/mdb/js/popper.min.js ') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name=_token]').attr('content')
        }
    });

</script>

</html>
