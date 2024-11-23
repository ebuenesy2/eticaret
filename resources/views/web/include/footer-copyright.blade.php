<p class="footer-copyright font-weight-light text-light">Copyright © 2024 Yıldırımdev Tarafından Yapılmıştır. </p>

<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "{{ $DB_HomeSettings->phone }}",
            call_to_action: "Merhaba, nasıl yardımcı olabilirim?",
            position: "left",
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>