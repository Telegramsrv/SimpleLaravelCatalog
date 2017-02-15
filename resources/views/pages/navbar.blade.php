
<div class="navbar-wrapper">
    <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">Project name</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">

                        @foreach($menu as $navbar)

                            @if ($navbar->isParent())

                                <li class="dropdown">
                                    <a href="{{$navbar->url}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$navbar->name}} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        @foreach($navbar->childs() as $navcat)
                                            <li><a href="{{ $navcat->url }}">{{$navcat->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                @else

                                @if(!$navbar->isChild())

                                    <li><a href="{{ $navbar->url }}">{{$navbar->name}}</a></li>

                                @endif

                            @endif

                        @endforeach

                    </ul>
                </div>
            </div>
        </nav>

    </div>
</div>