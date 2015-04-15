<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Leloo</title>
    <link rel="icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/freelancer.css')  }}" rel="stylesheet">
     <link href="{{ asset('css/style.css')  }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('font-awesome/css/font-awesome.min.css')  }}" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/js/select2.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0-rc.2/css/select2.min.css" rel="stylesheet" />

        <link href="{{ asset('css/select2.min.css')  }}" rel="stylesheet" />
        <script src="{{ asset('js/select2.min.js')  }}"></script>
        <script src="{{ asset('js/clear.js')  }}"></script>
       {{-- <link href="{{ asset('css/selectize.bootstrap3.css')  }}" rel="stylesheet" />
        --}}{{--<link href="{{ asset('css/selectize.css')  }}" rel="stylesheet" />--}}{{--
        <script src="{{ asset('js/standalone/selectize.js')  }}"></script>--}}
        <script type="text/javascript">
        </script>


       {{-- <script>
                $(document).ready(function() {
                    $('#input-tags3').selectize({
                        plugins: ['remove_button'],
                        delimiter: ',',
                        persist: false,
                        create: function(input) {
                            return {
                                value: input,
                                text: input
                            }
                        }
                    });
                });
            </script>--}}
            <script>

            var jqxhr = $.getJSON( "js/place_types.json", function() {
                console.log( "success" );
            })
                    .done(function() {
                        console.log( "second success" );
                    })
                    .fail(function() {
                        console.log( "error" );
                    })
                    .always(function() {
                        console.log( "complete" );
                    });

            // Perform other work here ...
            /*$.getJSON('js/place_types.json', function(place_type) {
                             var items =[];
                             $.each(place_type.place_types,function(i, item){
                                 items.push('<option value="' + item.id + '">' *//*+ item.id + '</p><p>' *//*+ item.label + '</option>');

                             });
                             $('<select/>', {
                                 'class': 'js-example-basic-multiple form-control',
                                 'multiple': 'multiple',
                                 html: items.join('')
                             }).appendTo('#select').select2();
                         });*/
                         $.getJSON("js/place_types.json",  function(place_type) {
                             $("#selecta option").remove(); // Remove all <option> child tags.
                             $.each(place_type.place_types, function(index, item) { // Iterates through a collection
                                 $("#selecta").append( // Append an object to the inside of the select box
                                     $("<option></option>") // Yes you can do this.
                                         .text(item.label)
                                         .val(item.id)
                                 );
                             });
                         });

            // Set another completion function for the request above
            jqxhr.complete(function() {
                console.log( "second complete" );
            });

            </script>



</head>

<body id="page-top" class="index">
  <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Leloo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">You are Here!</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Places</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    @yield('content')

</body>
</html>