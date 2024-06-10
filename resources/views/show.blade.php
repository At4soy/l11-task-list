@extends('layouts.app')

@section('title', $task -> title)

@section('styles')
<style>
  body{
  max-width: 99%;
  background-color: #dde7e7;
}

.section_our_solution {
  justify-content: center;
}


.section_our_solution .row {
  justify-content: center;
  align-items: center;
}

.our_solution_category {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.our_solution_category .solution_cards_box {
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.solution_cards_box .solution_card {
  flex: 0 50%;
  background: #fff;
  box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
    0 5px 15px 0 rgba(37, 44, 97, 0.15);
  border-radius: 15px;
  margin: 8px;
  padding: 10px 15px;
  position: relative;
  z-index: 1;
  overflow: hidden;
  min-height: 275px;
  max-width: 700px;
  transition: 0.7s;
}


.solution_card .solu_title h3 {
  color: #212121;
  font-size: 1.3rem;
  margin-top: 13px;
  margin-bottom: 13px;
}

.solution_card .solu_description p {
  font-size: 15px;
  margin-bottom: 15px;
}

.solution_card .solu_description button {
  border: 0;
  border-radius: 15px;
  background: linear-gradient(
    140deg,
    #42c3ca 0%,
    #42c3ca 50%,
    #42c3cac7 75%
  ) !important;
  color: #fff;
  font-weight: 500;
  font-size: 1rem;
  padding: 5px 16px;
}

.our_solution_content h1 {
  text-transform: capitalize;
  margin-bottom: 1rem;
  font-size: 2.5rem;
}
.our_solution_content p {
}

/*start media query*/
@media screen and (min-width: 320px) {
  .sol_card_top_3 {
    position: relative;
    top: 0;
  }

  .our_solution_category {
    width: 100%;
    margin-top: 300px;
  }

}
@media only screen and (min-width: 252px) {
  .our_solution_category .solution_cards_box {
    flex: 1;
  }
}
@media only screen and (min-width: 512px) {
  .our_solution_category {
    width: 40%;
    margin: 0 auto;
    margin-top: 200px;
  }
}

.flex-container {
  display: flex;
}

.jscn-sb{
  display: flex;
  margin-top: 100px;
  justify-content: space-between;
}

.margin-top-15{
  margin-top: 15px;
}
</style>
@endsection

@section('content')
<div class="section_our_solution">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="our_solution_category">
        <div class="solution_cards_box">
          <div class="solution_card">
            <div class="solu_title flex-container">
              <h1 style="font-size: 40px">{{$task->title}}</h1><p style="font-size: 35px">&nbsp;-&nbsp;</p><p style="font-size: 35px">${{$task->price}}</p>
            </div>
            <div class="solu_description">
              <p style="font-size: 25px">
                {{$task->description}}
              </p>
            </div>
            <div class="jscn-sb flex-container">
              <div class="margin-top-15">
                <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a class="inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-primary-3 transition duration-150 ease-in-out hover:bg-primary-accent-300 hover:shadow-primary-2 focus:bg-primary-accent-300 focus:shadow-primary-2 focus:outline-none focus:ring-0 active:bg-primary-600 active:shadow-primary-2 motion-reduce:transition-none dark:shadow-black/30 dark:hover:shadow-dark-strong dark:focus:shadow-dark-strong dark:active:shadow-dark-strong" href="{{ route('tasks.index')}}">Return Back</a>
                  <button class="inline-block rounded px-2 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none dark:text-secondary-600 dark:hover:text-secondary-500 dark:focus:text-secondary-500 dark:active:text-secondary-500" type="submit">Delete</button> 
                  <a href="{{ url('tasks/' . $task->id . '/edit') }}"  class="inline-block rounded px-2 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none dark:text-secondary-600 dark:hover:text-secondary-500 dark:focus:text-secondary-500 dark:active:text-secondary-500">Edit</a> 
                </form>
              </div>
              <div>
                <p>Registration Date: {{ $task -> created_at}}</p>
                <p>Last Update Date: {{$task -> updated_at}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection