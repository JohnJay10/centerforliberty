@extends('layouts.admin')

@section('content')
<div class="container mt-n10">
    <div class="card mb-4">
        <div class="card-header">News Table</div>
        <div class="card-body">
            <div class="datatable">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row"><div class="col-sm-12 col-md-6">
                        <div class id="dataTable_length">

                              </div></div><div class="col-sm-12 col-md-6">
                                   <div id="dataTable_filter" class="dataTables_filter"></div></div></div><div class="row"><div class="col-sm-12"><table class="table table-bordered table-hover dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                    <tbody>
                 @if(count($news)>0)
                    <tr role="row" class="odd">
                            <td class="sorting_1">S/N</td>
                            <td>News Posts</td>
                            <td>Date Created</td>
                            <td>Modify</td>
                        </tr>

                        @foreach($news as $news)

                        <tr role="row" class="even">
                            <td class="sorting_1"></td>
                            <td>{{$news->topic}}</td>
                            <td>{{$news->created_at}}</td>
                        <td><a href="news/{{$news->id}}/edit"> <i class="fa fa-edit text-blue"></i></a>/
                           {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['news.destroy', $news->id]
                            ]) !!}
                                {!! Form::submit('delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                          {{-- <a href="{{ route('news.destroy', $news->id) }}" ><i class="fa fa-trash "></i></a>  --}}


                        </td>

                        </tr>
                        @endforeach
                    </tbody>
                    @else
                    <p>You Have no post</p>

                    @endif
                </table></div></div><div class="row">

                <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
            {{!! $news->links() !!}}
            </div>
        </div>
    </div>

</div>
@endsection

