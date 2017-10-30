@extends('layouts.app')

@section('content')
<h1>ユーザーリスト</h1>
<section class="row text-center placeholders">
    <example users-json="{{ $users }}"></example>
</section>
@endsection
