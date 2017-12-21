

    <!-- Sidebar user panel (optional) -->
    <section class="section hero is-light">
        <div class="box m1">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-64x64">
                        <img src="http://placehold.it/128x128" alt="Image">
                    </figure>
                </div>
                <div class="media-content is-centered">
                        <p>
                            <strong>
                                @if (Auth::guest())
                                    <p>Invitado</p>
                                @else
                                    <p>{{ Auth::user()->name}}</p>
                                @endif
                            </strong>
                        </p>
                    <a href="#"><i class="fa fa-circle"></i> Online</a>
                </div>
            </div>
        </div>

        <!-- search form (Optional) -->
        <p class="control has-icon has-icon-right">
            <input type="text" name="q" class="input" placeholder="Buscar..."/>
            <i class="fa fa-search"></i>
        </p>


        <!-- Sidebar Menu -->

        <aside class="menu">
            <ul class="menu-list">
                @include('layouts.menu')
            </ul>
        </aside>
    </section>