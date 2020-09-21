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
        });

        $('#country').on('change', function() {
          getMoreUsers();
        });

        $('#sort_by').on('change', function (e) {
					getMoreUsers();
        });
        
        $('#salary_range').on('change', function (e) {
					getMoreUsers();
				});
    });


    function getMoreUsers(page) {

      var search = $('#search').val();

      // Search on based of country
      var selectedCountry = $("#country option:selected").val();

      // Search on based of type
      var selectedType = $("#sort_by option:selected").val();

      // Search on based of salary
      var selectedRange = $("#salary_range option:selected").val();



      $.ajax({
        type: "GET",
        data: {
          'search_query':search,
          'country': selectedCountry,
          'sort_by': selectedType,
          'range': selectedRange
        },
        url: "{{ route('users.get-more-users') }}" + "?page=" + page,
        success:function(data) {
          $('#user_data').html(data);
        }
      });
    }
  </script>

  @endpush

