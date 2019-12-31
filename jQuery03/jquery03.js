(function($, window) {
    $(function() {
        //課題1
        $('body').on('click', function() {
            $('#click_me').css({'color': 'red'});
        }

        //課題2
        function mail() {
            var email = $('#email').val();
            if (email == '') {
                alert('メールアドレスを入力してください');
            } else if (email.indexOf('@') < 0) {
                alert('メールアドレスには必ず「@」が必要です');
            }
        }
        function pass() {
            var password = $('#password').val();
            if (password == '') {
                alert('パスワードを入力してください');
            } else if (password.length < 6) {
                alert('パスワードは6文字以上です');
            }
        }
        $('#login').on('click', mail);
        $('#login').on('click', pass);

        //課題3
        // $.ajax({
        //     url: url,
        //     type: 'get',
        //     data: {}
        // })
    // 上記の部分を、下記の様に書き換える
        // $.getJSON(url)

        //課題4
        //サンプルテキストで使用しているflatpickerではオプションでボタンをつけられないので
        //datepickerを使用しました
        $('#date_picker').datepicker({
            showOn: "button",
            buttonText: "日付の選択",
            showButtonPanel: true
        });

        //課題5
        // <dt>郵便番号</dt>
        // <dd><input type="text" id="zip1">-<input type="text" id="zip2"></dd>
    // HTMLの上記の部分を下記の様に変更
        // <dt>郵便番号</dt>
        // <dd><input type="text" id="zip"></dd>

        // $('#zip1').jpostal({
        //    postcode : [
        //      '#zip1',
        //      '#zip2'
        //    ],
    // JSの上記の部分を下記の様に変更
        // $('#zip').jpostal({
        //    postcode : [
        //      '#zip'
        //    ],

        //課題6
        //<input type="button" id="btn" value="検索">  HTMLに追加
    // JSの課題5で変更した部分を、下記の様に更に変更
        // $('#btn').jpostal({
        //    click : '#btn',
        //    postcode : [
        //      '#zip'
        //    ],
    });
})(jQuery, window);
