@extends('template.layout')

@section('container')


<div class="container bg-transparent p-5 rounded-5 shadow-lg text-white mt-5 pt-1">
<h2 class="text-white fw-bolder text-center py-2">{{ $title }}</h2>
<div class="table-responsive">
    <table class="table table-borderless table-rounded">
        <colgroup>
            <col span="1" style="width: 90%;">
         </colgroup>
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
        <?php $i=1; foreach($item as $item): ?>
          <tr>
            <td>{{ $item->name}}</td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
    </div>
</div>
@endsection