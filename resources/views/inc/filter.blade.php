<div class="container">


    <form action="">
    <div class="select-container">
      <select name="" id="">
        <option value="">Option 1</option>

      </select>
    </div>
    <div class="select-container">
      <select name="" id="">
        <option value="">Option 1</option>

      </select>
    </div>
 
 
    <div class="select-container">
      <select name="" id="">
        <option value="">Option 1</option>
        @foreach(\App\Constants\GlobalConstants::LIST_COUNTRIES as $country)
        <option>{{ $country }}</option>
        @endforeach

      </select>
    </div>
    </form>
  </div>