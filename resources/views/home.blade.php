@extends('layouts.master')
@section('content')

  @include('inc.search')
  <div id="user_data">
    @include('pages.user_data')
  </div>
  @endsection

  @push('scripts')

  <script>
    $(document).ready(function() {
        $(document).on('click', '.pagination a', function(event) {
          event.preventDefault();
          var page = $(this).attr('href').split('page=')[1];
          getMoreUsers(page);
        });
    });


    function getMoreUsers(page) {
      $.ajax({
        type: "GET",
        url: "{{ route('users.get-more-users') }}" + "?page=" + page,
        success:function(data) {
          console.log(data);
          $('#user_data').html(data);
        }
      });
    }
  </script>

  @endpush

