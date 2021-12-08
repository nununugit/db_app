<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>chkREST(授業テーブル)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function() {
            $("#button1").click(function() {
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

            $("#button2").click(function() {
                var url = $('#baseurl').val();
                var method = "POST";
                var json = {
                    "c_name": $('#c_name2').val(),
                    "c_content": $('#c_content2').val(),
                    "t_id": $('#t_id2').val(),
                    "f_id": $('#f_id2').val(),
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

            $("#button3").click(function() {
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

            $("#button4").click(function() {
                var url = $('#baseurl').val() + "/" + $('#id4').val();
                var method = "PUT";
                var json = {
                    "c_name": $('#c_name4').val(),
                    "c_content": $('#c_content4').val(),
                    "t_id": $('#t_id4').val(),
                    "f_id": $('#f_id4').val(),

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

            $("#button5").click(function() {
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
        <input type="text" value="/api/curricula" id="baseurl" size="50">
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
    <p><input type="button" value="すべてのデータを取得(index)" id="button1"></p>
    <hr> 【２】
    <p>
        授業名 <input type="text" value="" id="c_name2" size="20"><br> 
        授業内容 <textarea id="c_content2" rows="4" cols="40"></textarea><br>
        教師id <input type="text" value="" id="t_id2" size="20"><br>
        分野id <input type="text" value="" id="f_id2" size="20"><br>
    </p>
    <p><input type="button" value="新しいデータを追加(store)" id="button2"></p>
    <hr> 【３】
    <p>id <input type="text" value="" id="id3" size="5"></p>
    <p><input type="button" value="指定したidのデータを取得(show)" id="button3"></p>
    <hr> 【４】
    <p>
        変更先id <input type="text" value="" id="id4" size="5"><br> 
        授業名 <input type="text" value="" id="c_name4" size="20"><br> 
        授業内容 <textarea id="c_content4" rows="4" cols="40"></textarea><br>
        教師id <input type="text" value="" id="t_id4" size="20"><br>
        分野id <input type="text" value="" id="f_id4" size="20"><br>
    </p>
        <p><input type="button" value="指定したidのデータを更新(update)" id="button4"></p>
    <hr> 【５】
    <p>id <input type="text" value="" id="id5" size="5"></p>
    <p><input type="button" value="指定したidのデータを削除(destroy)" id="button5"></p>
    <hr>
</body>

</html>