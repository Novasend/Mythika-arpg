<nav class="navbar navbar-expand-md navbar-light">
    <ul class="navbar-nav ml-auto mr-auto">
        <li class="nav-item"><a href="{{ url('rules') }}" class="nav-link">Rules</a></li>
        <li class="nav-item"><a href="{{ url('team') }}" class="nav-link">Team</a></li>
        <li class="nav-item"><a href="{{ url('credits') }}" class="nav-link">Credits</a></li>
        <li class="nav-item"><a href="{{ url('discord') }}" class="nav-link">Discord</a></li>
        <li class="nav-item"><a href="mailto:{{ env('CONTACT_ADDRESS') }}" class="nav-link">Contact Us</a></li>
    </ul>
</nav>
<div class="copyright">Mythika-ARPG &copy; NovasEnd - All Rights Reserved {{ Carbon\Carbon::now()->year }}</div>