<div class="modal fade" id="Delete_Subsection{{$subsection->id}}"
     tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    {{trans('cpanel/sections.Delete Section')}}
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.subsections.delete', 'test')}}" method="GET">
                    @csrf

                    <input type="hidden" name="id" value="{{$subsection->id}}">
                    <h5 style="font-family: 'Cairo', sans-serif;">
                        {{trans('cpanel/sections.Deleted_Section_tilte')}}
                    </h5>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">
                            {{trans('cpanel/sections.Close')}}
                        </button>

                        <button  class="btn btn-danger">
                            {{trans('cpanel/sections.Submit')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

