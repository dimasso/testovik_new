@extends('index.top')

@section('layout')
    <?php
    $action_name = "";
    $controller_name = "";
    $current_path_parts = explode("/",Route::getFacadeRoot()->current()->uri());
    if(isset($current_path_parts[0])){
        $controller_name = $current_path_parts[0];
    }
    if(isset($current_path_parts[1])){
        $action_name = $current_path_parts[1];
    }
	?>

<body>
    <style>
        .social-btns-new a:before{
            content: "";
        }
        .social-btns-new a{
            margin-bottom: 10px;
        }
        .social-btns-new a{
            width: 42px !important;
            height: 42px !important;
        }
        .social-btns-new a svg{
            fill: #fff;
        }
    </style>
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

    <script type="text/javascript" src="/static/js/main.min.js"></script>

    <script>
        $(document).ready(function(){
            if($(document).width() > 560){
                $(".timeline .__item .__point").on("mouseover",function(){
                    $(this).closest(".__item").find(".roadmap-img").css("display","block");
                })

                $(".timeline .__item .__point").on("mouseout",function(){
                    $(this).closest(".__item").find(".roadmap-img").css("display","none");
                })
            }
        })

        $(document).ready(function(){
            $(".social-btns-new a").on("mouseover",function(){
                $(this).css("background-color","white");
                $(this).find("svg").css("fill","black");
            });
            $(".social-btns-new a").on("mouseout",function(){
                $(this).css("background","none");
                $(this).find("svg").css("fill","white");
            });
        })
    </script>
@endsection