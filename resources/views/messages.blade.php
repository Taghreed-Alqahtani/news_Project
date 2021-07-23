<!-- Success alert -->
<div class="flex bg-green-200 p-4">
  <div class="mr-4">
    <div class="h-10 w-10 text-white bg-green-600 rounded-full flex justify-center items-center">
      <i class="material-icons">done</i>
    </div>
  </div>
  <div class="flex justify-between w-full">
    <div class="text-green-600">
      <p class="mb-2 font-bold">
        Succes alert
      </p>
      <p class="text-xs">
        description text
      </p>
    </div>
    <div class="text-sm text-gray-500">
       <span>x</span>
    </div>
  </div>
</div>
<!-- Info alert -->
<div class="flex bg-blue-200 p-4">
  <div class="mr-4">
    <div class="h-10 w-10 text-white bg-blue-600 rounded-full flex justify-center items-center">
      <i class="material-icons">info</i>
    </div>
  </div>
  <div class="flex justify-between w-full">
    <div class="text-blue-600">
      <p class="mb-2 font-bold">
        Info alert
      </p>
      <p class="text-xs">
        description text
      </p>
    </div>
    <div class="text-sm text-gray-500">
       <p>x</p>
    </div>
  </div>
</div>
<!-- Warning alert -->
<div class="flex bg-orange-200 p-4">
  <div class="mr-4">
    <div class="h-10 w-10 text-white bg-orange-600 rounded-full flex justify-center items-center">
      <i class="material-icons">warning</i>
    </div>
  </div>
  <div class="flex justify-between w-full">
    <div class="text-orange-600">
      <p class="mb-2 font-bold">
        Warning alert
      </p>
      <p class="text-xs">
        description text
      </p>
    </div>
    <div class="text-sm text-gray-500">
       <span>x</span>
    </div>
  </div>
</div>
<!-- Danger alert -->
<div class="flex bg-red-200 p-4">
  <div class="mr-4">
    <div class="h-10 w-10 text-white bg-red-600 rounded-full flex justify-center items-center">
      <i class="material-icons">report</i>
    </div>
  </div>
  <div class="flex justify-between w-full">
    <div class="text-red-600">
      <p class="mb-2 font-bold">
        Danger alert
      </p>
      <p class="text-xs">
        description text
      </p>
    </div>
    <div class="text-sm text-gray-500">
      <p>x</p>
    </div>
  </div>
</div>


@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif