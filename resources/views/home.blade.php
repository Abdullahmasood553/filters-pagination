@extends('layouts.master')
@section('content')

  @include('inc.search')
  @include('inc.filter')
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


        $('#search').on('keyup', function() {
          $value = $(this).val();
          getMoreUsers(1);
        })
    });


    function getMoreUsers(page) {

      var search = $('#search').val();
      $.ajax({
        type: "GET",
        data: {
          'search_query':search
        },
        url: "{{ route('users.get-more-users') }}" + "?page=" + page,
        success:function(data) {
          $('#user_data').html(data);
        }
      });
    }
  </script>

  @endpush

