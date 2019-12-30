(function($,window) {
    $(function() {
        //課題1
        $('h2').remove();

        //課題2
        var list1 = $('#index').text();
        alert(list1);
        var list2 = $('#index').html();
        alert(list2);

        //課題3
        $('#index').append('<li>メソッド</li>');

        //課題4、5
        $('#index').find('li').each(function() {
            /*alert($(this).text().length);  課題4の表示部分*/
            var str = $(this).text().length;
            $(this).text($(this).text() + '[' + str + '文字]');
        });

    });
})(jQuery, window);
