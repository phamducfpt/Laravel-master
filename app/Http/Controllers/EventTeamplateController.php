<?php

namespace App\Http\Controllers;
use App\Http\Requests\EventRequest;
use App\Models\EventTeamplate;
use Illuminate\Http\Request;

class EventTeamplateController extends Controller
{

    public function list(EventRequest $request)
    {
        $queryBuilder = EventTeamplate::query();
        $search = $request->query('search');
        $status = $request->query('status');
        if($search && strlen($search) > 0){
            $queryBuilder = $queryBuilder->where('eventName','like','%'.$search.'%')
                ->orWhere('bandName','like','%'.$search.'%')
                ->orWhere('portfolio','like','%'.$search.'%');
        }
        if($status){
            $queryBuilder = $queryBuilder->where('status',$status);
        }
        $listEvent = $queryBuilder->paginate(10)->appends(['search' => $search, 'status' => $status]);
        return view('/users/list', [
            'list' => $queryBuilder,
            'status' => $status

        ]);
    }

    public function create()
    {
        return view('/users/form',[
            'current'=> null
            ]);
        //
    }
    public function store(EventRequest $request)
    {
        $events = new EventTeamplate();
        $events->fill($request->validated());
        $events->save();
        return redirect('/EventTeamplate/event/list',);
        //
    }
    public function save(Request $request, $id)
    {
        $detailEvent =  EventTeamplate::find($id);
        $detailEvent->update($request->valdated());
        $detailEvent->save();
        return redirect('/EventTeamplate/event/list');
    }
    public function show($id)
    {

        //
    }
    public function edit(EventTeamplate $eventTeamplate)
    {
        //
    }
    public function update($id)
    {
        $currentEvent = EventTeamplate::find($id);
        return view('/users/edit',[
            'current' => $currentEvent
        ]);
        //
    }
    public function destroy(EventTeamplate $eventTeamplate)
    {
        //
    }
    public function delete($id)
    {
        $detailEvent = EventTeamplate::find($id);
        $detailEvent->delete();
        return redirect('/EventTeamplate/event/list');
    }
}
