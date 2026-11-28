<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>自分の時間割</title>
</head>
<body>
    <h1>自分の時間割</h1>

    @if ($entries->isEmpty())
        <p>まだ授業が登録されていません</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>曜日</th>
                    <th>時限</th>
                    <th>授業名</th>
                    <th>教室</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entries as $entry)
                    <tr>
                        <td>{{ $dayNames[$entry->day] ?? $entry->day }}</td>
                        <td>{{ $entry->period }}限</td>
                        <td>{{ $entry->title }}</td>
                        <td>{{ $entry->room ?? '未設定' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>
</html>