<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <span class="navbar-brand">
            <a class="navbar-brand" href="/">
                <img src="{{asset('assets/moon-logo.png')}}" alt="Moon">
                <span class="beta-text">pay with crypto</span>
            </a>
        </span>
        <button aria-controls="basic-navbar-nav" type="button" aria-label="Toggle navigation" class="navbar-toggler collapsed"><span class="navbar-toggler-icon"></span></button>
        <div class="ml-auto text-right navbar-collapse collapse" id="basic-navbar-nav">
            <div class="ml-auto navbar-nav">
                
                @if(\Auth::user() == true)
                    <span style="margin-right: 1rem; height: 0px;">
                        <div id="AddToBrowser"><div>
                            <button type="button" class="btn btn-primary btn-lg">
                                <img class="browser-icon" src="/images/chrome.svg" alt="Browser">Add To Browser</button>
                            </div>
                        </div>
                    </span>
                @endif
                <a href="/" data-rb-event-key="/" class="nav-link">Home</a>
                <a href="/faqs" data-rb-event-key="/faqs" class="nav-link">FAQ</a>
                <a target="_blank" href="https://angel.co/company/moon-13/jobs" data-rb-event-key="https://angel.co/company/moon-13/jobs" class="nav-link">Careers</a>
                <a href="/about" data-rb-event-key="/about" class="nav-link">About Us</a>
                <button type="button" aria-label="Toggle navigation" class="navbar-support navbar-toggler collapsed" style="text-align: right; padding: 0px; margin: 0px; height: 43px;">
                    <a href="#" class="nav-link" role="button">Support</a>
                </button>
                @if (\Auth::user() != true)
                    <div class="divider"></div>
                    <a href="/login" data-rb-event-key="/login" class="nav-link">Log In</a>
                    <span style="margin-right: 1rem;"></span>
                    <a href="/signup" data-rb-event-key="/signup" class="btn btn-primary btn-lg nav-link" style="color: white; margin-left: auto;">
                        <span class="sign-up-btn">Sign Up</span>
                    </a>
                @endif
                @if(\Auth::user() == true)
                    <div>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <button class="drop-down" style="margin-top: 5px;"  href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                         Logout
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="svg-inline--fa fa-caret-down fa-w-10 " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                            <path fill="currentColor" d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"></path>
                                        </svg>
                                </button>
                            </form>
                        <div style="display: none;"><a href="#" class="nav-link" role="button">Settings</a><a href="#" class="nav-link" role="button">Log Out</a></div>
                    </div>
                @endif
                
            </div>
        </div>
    </nav>
</div>