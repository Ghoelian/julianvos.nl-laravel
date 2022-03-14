@push('assets')
<style nonce="{{ csp_nonce() }}">
    .footer-paragraph {
        margin-bottom: 0px;
    }

    .footer-links {
        font-size: 2em;
    }
</style>
@endpush

<footer class="footer">
    <div class="text-center">
        <div>
            <span class="material-icons md-18">copyright</span> Copyright 2021 Julian Vos
        </div>
        <div>
            <p class="footer-paragraph">
                <span class="footer-links">
                    <a href="https://github.com/Ghoelian" class="footer-link"><i class="fab fa-github"></i></a>
                    <a href="https://www.linkedin.com/in/julian-vos-b09783150/" class="footer-link"><i class="fab fa-linkedin"></i></a>
                </span>
            </p>
        </div>
        <div>
            <a class="footer-link" href="{{ route('privacy-policy') }}">Privacy Policy</a>
            |
            <a class="footer-link" href="{{ route('terms-of-service') }}">Terms of Service</a>
        </div>
    </div>
</footer>