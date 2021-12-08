<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>chkREST(ニューステーブル)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function() {
            $("#index").click(function() {
                var url = $('#baseurl').val();
                var method = "GET";
                $.ajax({
                        url: url,
                        type: method,
                        timeout: 5000,
                        beforeSend: function(jqXHR, settings) {
                            $("#method").text(method);
                            $("#url").text(url);
                            $("#data").text(settings.data);
                        },
                    })
                    .done(function(data, textStatus, jqXHR) {
                        $("#status").text(jqXHR.status);
                        $("#json").text(JSON.stringify(data));
                        $("#message").text("");
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        $("#status").text("err:" + jqXHR.status);
                        $("#json").text(textStatus);
                        $("#message").text(errorThrown);
                    })
                    .always(function() {});
            });

            $("#create").click(function() {
                var url = $('#baseurl').val();
                var method = "POST";
                var json = {
                    "n_title": $('#n_title2').val(),
                    "n_content": $('#n_content2').val(),
                    "thumbnail_pass": $('#thumbnail_pass2').val(),
                };
                $.ajax({
                        url: url,
                        type: method,
                        timeout: 5000,
                        contentType: "application/json",
                        data: JSON.stringify(json),
                        dataType: "json",
                        beforeSend: function(jqXHR, settings) {
                            $("#method").text(method);
                            $("#url").text(url);
                            $("#data").text(settings.data);
                        },
                    })
                    .done(function(data, textStatus, jqXHR) {
                        $("#status").text(jqXHR.status);
                        $("#json").text(JSON.stringify(data));
                        $("#message").text("");
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        $("#status").text("err:" + jqXHR.status);
                        $("#json").text(textStatus);
                        $("#message").text(errorThrown);
                    })
                    .always(function() {});
            });

            $("#read").click(function() {
                var url = $('#baseurl').val() + "/" + $('#id3').val();
                var method = "GET";
                $.ajax({
                        url: url,
                        type: method,
                        timeout: 5000,
                        beforeSend: function(jqXHR, settings) {
                            $("#method").text(method);
                            $("#url").text(url);
                            $("#data").text(settings.data);
                        },
                    })
                    .done(function(data, textStatus, jqXHR) {
                        $("#status").text(jqXHR.status);
                        $("#json").text(JSON.stringify(data));
                        $("#message").text("");
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        $("#status").text("err:" + jqXHR.status);
                        $("#json").text(textStatus);
                        $("#message").text(errorThrown);
                    })
                    .always(function() {});
            });

            $("#update").click(function() {
                var url = $('#baseurl').val() + "/" + $('#id4').val();
                var method = "PUT";
                var json = {
                    "n_title": $('#n_title4').val(),
                    "n_content": $('#n_content4').val(),
                    "thumbnail_pass": $('#thumbnail_pass4').val(),
                };
                $.ajax({
                        url: url,
                        type: method,
                        timeout: 5000,
                        contentType: "application/json",
                        data: JSON.stringify(json),
                        dataType: "json",
                        beforeSend: function(jqXHR, settings) {
                            $("#method").text(method);
                            $("#url").text(url);
                            $("#data").text(settings.data);
                        },
                    })
                    .done(function(data, textStatus, jqXHR) {
                        $("#status").text(jqXHR.status);
                        $("#json").text(JSON.stringify(data));
                        $("#message").text("");
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        $("#status").text("err:" + jqXHR.status);
                        $("#json").text(textStatus);
                        $("#message").text(errorThrown);
                    })
                    .always(function() {});
            });

            $("#delete").click(function() {
                var url = $('#baseurl').val() + "/" + $('#id5').val();
                var method = "DELETE";
                $.ajax({
                        url: url,
                        type: method,
                        timeout: 5000,
                        beforeSend: function(jqXHR, settings) {
                            $("#method").text(method);
                            $("#url").text(url);
                            $("#data").text(settings.data);
                        },
                    })
                    .done(function(data, textStatus, jqXHR) {
                        $("#status").text(jqXHR.status);
                        $("#json").text(JSON.stringify(data));
                        $("#message").text("");
                    })
                    .fail(function(jqXHR, textStatus, errorThrown) {
                        $("#status").text("err:" + jqXHR.status);
                        $("#json").text(textStatus);
                        $("#message").text(errorThrown);
                    })
                    .always(function() {});
            });
        });
    </script>
</head>

<body>
    <p>Request Url
        <input type="text" value="/api/newses" id="baseurl" size="50">
    </p>
    <table border="1">
        <tr>
            <th>HTTPメソッド</th>
            <td id="method"></td>
        </tr>
        <tr>
            <th>URL</th>
            <td id="url"></td>
        </tr>
        <tr>
            <th>データ</th>
            <td id="data"></td>
        </tr>
    </table>
    </p>
    <p>レスポンス：
        <table border="1">
            <tr>
                <th>HTTPステータスコード</th>
                <td><span id="status"></span></td>
            </tr>
            <tr>
                <th>受信したJSON</th>
                <td><span id="json"></span></td>
            </tr>
            <tr>
                <th>エラーメッセージ</th>
                <td id="message"></td>
            </tr>
        </table>
    </p>
    <hr> 【１】
    <p><input type="button" value="すべてのデータを取得(index)" id="index"></p>
    <hr> 【２】
    <p>
        ニュースタイトル <input type="text" value="" id="n_title2" size="20">
        ニュース記事概要 <textarea id="n_content2" rows="4" cols="40"></textarea>
        画像パス(未実装) <input type="text" value="" id="thumbnail_pass2" size="20"><br> 
    </p>
    <p>
        <input type="button" value="新しいデータを追加(store)" id="create">
    </p>
    
    <hr> 【３】
    <p>id 
        <input type="text" value="" id="id3" size="5">
    </p>
    <p>
        <input type="button" value="指定したidのデータを取得(show)" id="read">
    </p>
    
    <hr> 【４】
    <p>id 
        <input type="text" value="" id="id4" size="5"><br> 
        ニュースタイトル <input type="text" value="" id="n_title4" size="20">
        ニュース記事概要 <textarea id="n_content4" rows="4" cols="40"></textarea>
        画像パス(未実装) <input type="text" value="" id="thumbnail_pass4" size="20"><br> 
    </p>
    
    <p>
        <input type="button" value="指定したidのデータを更新(update)" id="update">
    </p>
    
    <hr> 【５】
    
    <p>id 
        <input type="text" value="" id="id5" size="5">
    </p>
    <p>
        <input type="button" value="指定したidのデータを削除(destroy)" id="delete">
    </p>
    
    <hr>
</body>
<!--OK--->

</html>