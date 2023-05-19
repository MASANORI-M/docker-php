        <footer id="footer">
            Copyright <a href="">PHP-Docker用</a>. All Rights Reserved.
        </footer>
        <script src="../assets/js/jquery-2.2.2.min.js"></script>
        <script>
        $(function(){
            // フッターを最下部に固定
            let $ftr = $('#footer');
            if( window.innerHeight > $ftr.offset().top + $ftr.outerHeight() ){
                $ftr.attr({'style': 'position:fixed; top:' + (window.innerHeight - $ftr.outerHeight()) +'px;' });
            }
        });
        </script>
    </body>
</html>