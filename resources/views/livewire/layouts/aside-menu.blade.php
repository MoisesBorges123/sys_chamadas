<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{url('/' . $page='index')}}">
            <img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
            <img src="{{URL::asset('assets/images/brand/logo1.png')}}" class="header-brand-img dark-logo" alt="Admintro logo">
            <img src="{{URL::asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
            <img src="{{URL::asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Admintro logo">
        </a>
    </div>
    <div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{URL::asset('assets/images/users/2.png')}}" alt="user-img" class="avatar-xl rounded-circle mb-1">
            </div>
            <div class="user-info">
                <h5 class=" mb-1">{{Auth::user()->name ?? 'Anônimo'}}<i class="ion-checkmark-circled  text-success fs-12"></i></h5>
                <p>{{Auth::user()->profile->name ?? ''}}</p>
            </div>
        </div>        
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category mt-4">Menu Principal</li>
        <li class="slide">
            <a class="side-menu__item"  href="{{route('admin.dashboard')}}">
                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"></path><path d="M20 6h-3V4c0-1.11-.89-2-2-2H9c-1.11 0-2 .89-2 2v2H4c-1.11 0-2 .89-2 2v11c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zM9 4h6v2H9V4zm11 15H4v-2h16v2zm0-5H4V8h3v2h2V8h6v2h2V8h3v6z"></path></svg>
            <span class="side-menu__label">Painel</span></a>
        </li>               
        <li class="slide">
            <a class="side-menu__item"  href="{{route('admin.professores')}}">
                <svg class="side-menu__icon"  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"><path d="M38-160v-94q0-35 18-63.5t50-42.5q73-32 131.5-46T358-420q62 0 120 14t131 46q32 14 50.5 42.5T678-254v94H38Zm700 0v-94q0-63-32-103.5T622-423q69 8 130 23.5t99 35.5q33 19 52 47t19 63v94H738ZM358-481q-66 0-108-42t-42-108q0-66 42-108t108-42q66 0 108 42t42 108q0 66-42 108t-108 42Zm360-150q0 66-42 108t-108 42q-11 0-24.5-1.5T519-488q24-25 36.5-61.5T568-631q0-45-12.5-79.5T519-774q11-3 24.5-5t24.5-2q66 0 108 42t42 108ZM98-220h520v-34q0-16-9.5-31T585-306q-72-32-121-43t-106-11q-57 0-106.5 11T130-306q-14 6-23 21t-9 31v34Zm260-321q39 0 64.5-25.5T448-631q0-39-25.5-64.5T358-721q-39 0-64.5 25.5T268-631q0 39 25.5 64.5T358-541Zm0 321Zm0-411Z"/></svg>                
                <span class="side-menu__label">Professores </span></a>
        </li>               
    </ul>
</aside>
<!--aside closed-->