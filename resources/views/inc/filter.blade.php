<div class="container">


    <form action="">
    <div class="select-container">
      <select id="salary_range">
        <option>{{\App\Constants\GlobalConstants::ALL}}</option>
        @foreach(\App\Constants\GlobalConstants::SALARY_RANGE as $range)
        <option>{{$range}}</option>
        @endforeach
      </select>
    </div>
    <div class="select-container">
      <select id="sort_by">
        <option>{{\App\Constants\GlobalConstants::ALL}}</option>
        @foreach(\App\Constants\GlobalConstants::LIST_TYPE as $type)
        <option>{{ucfirst($type)}}</option>
        @endforeach
      </select>
    </div>
 
 
    <div class="select-container">
      <select id="country">
        <option>{{\App\Constants\GlobalConstants::ALL}}</option>
        @foreach(\App\Constants\GlobalConstants::LIST_COUNTRIES as $country)
        <option>{{ $country }}</option>
        @endforeach
      </select>
    </div>
    </form>
  </div>