<?php

namespace Kordy\Ticketit\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kordy\Ticketit\Models;
use Kordy\Ticketit\Traits\Purifiable;

class CommentsController extends Controller
{
    use Purifiable;

    public function __construct()
    {
        $this->middleware('Kordy\Ticketit\Middleware\IsAdminMiddleware', ['only' => ['edit', 'update', 'destroy']]);
        $this->middleware('Kordy\Ticketit\Middleware\ResAccessMiddleware', ['only' => 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $a_content = $this->purifyHtml($request->get('content'));
        $request->merge(['content'=>$a_content['content']]);

        $this->validate($request, [
            'ticket_id'   => 'required|exists:ticketit,id',
            'content'     => 'required|min:6',
        ]);

        $comment = new Models\Comment();

        $comment->content = $a_content['content'];
        $comment->html = $a_content['html'];

        $comment->ticket_id = $request->get('ticket_id');
        $comment->user_id = \Auth::user()->id;
        $comment->save();

        $ticket = Models\Ticket::find($comment->ticket_id);
        $ticket->updated_at = $comment->created_at;
        $ticket->save();

        return back()->with('status', trans('ticketit::lang.comment-has-been-added-ok'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
