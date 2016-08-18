<div class="header">
    <div class="container">
        <div class="logo"><img src="{{ asset('img/logo-provident.svg') }}"></div>
        <a href="{{ url('/auth/logout') }}" class="login"><h>Logout</h></a>
    </div>
</div>
    
<div class="nav">
    <div class="container">
        @if ($page_id == 1)
            <div class="nav-text"><h>BOOKING STATUS</h></div>
        @elseif ($page_id == 2)
            <div class="nav-text"><h>EDIT FLAT</h></div>
        @elseif ($page_id == 3)
            <div class="nav-text"><h>EDIT TOWER</h></div>
        @endif
        <div class="nav-bar">
            
       <ul>
                <li>
                    <a href="{{ url('/admin/tower') }}" class="btn"><span>EDIT TOWER</span></a>
                </li>
                <li>
                    <a href="{{ url('/admin/edit') }}" class="btn"><span>EDIT FLAT</span></a>
                </li>
                <li>
                    <a href="{{ url('/admin/home') }}" class="btn"><span>BOOKING STATUS</span></a>
                </li>
            </ul>
        </div>
        
    </div>
    
</div>
