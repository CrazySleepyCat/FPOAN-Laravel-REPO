@extends('template')

@section('css')
    <link rel="stylesheet" href="<?= asset('css/joke_style.css') ?>">
@endsection

@section('title', 'Jokes')

@section('body')
    <div class="container">
        <div class="jokes">
            <?php foreach ($jokes as $jk) { ?>
            <table>
                <tr>
                    <th class="col-2">ID</th>
                    <th class="col-8">Joke</th>
                </tr>
                <tr>
                    <td class="col-2"><?= $jk['id'] ?></td>
                    <td class="col-8"><?= $jk['joke'] ?></td>
                </tr>
            </table>
            <?php } ?>
        </div>
    </div>
@endsection

