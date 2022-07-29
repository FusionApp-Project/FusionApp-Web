@extends('layout.app')

@section('page_title', trans('schedule.title'))

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="white-box">
        @foreach($st_rooster as $st_rooster_item)
            {{$st_rooster_item->id}}
        @endforeach
      <table class="lesuur-rooster table table-striped table-bordered table-hover table-responsive">
        <tr>
            <th></th>
            <th>@lang('schedule.monday')</th>
            <th>@lang('schedule.tuesday')</th>
            <th>@lang('schedule.wednesday')</th>
            <th>@lang('schedule.thursday')</th>
            <th>@lang('schedule.friday')</th>
        </tr>
        @for ($i = 1; $i < 10; $i++)
            <tr>
                <td>{{$i}}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        @endfor
        
      </table>
    </div>
  </div>
</div>
@endsection