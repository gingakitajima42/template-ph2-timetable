<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>授業を登録</title>
</head>
<body>
    <h1>授業を登録</h1>

    <form method="POST" action="/entries">
        @csrf

        <div>
            <label for="day">曜日</label>
            <select id="day" name="day" required>
                <option value="1">月</option>
                <option value="2">火</option>
                <option value="3">水</option>
                <option value="4">木</option>
                <option value="5">金</option>
            </select>
        </div>

        <div>
            <label for="period">時限</label>
            <select id="period" name="period" required>
                <option value="1">1限</option>
                <option value="2">2限</option>
                <option value="3">3限</option>
                <option value="4">4限</option>
                <option value="5">5限</option>
                <option value="6">6限</option>
            </select>
        </div>

        <div>
            <label for="title">授業名</label>
            <input id="title" name="title" type="text" required>
        </div>

        <div>
            <label for="room">教室</label>
            <input id="room" name="room" type="text">
        </div>

        <button type="submit">登録する</button>
    </form>

    <a href="/entries">一覧へ戻る</a>
</body>
</html>
