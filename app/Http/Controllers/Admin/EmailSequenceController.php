<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EmailSequence;
use App\Models\EmailSequenceEmail;
use Illuminate\Http\Request;

class EmailSequenceController extends Controller
{
    public function index()
    {
        $sequences = EmailSequence::with('emails')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.email-sequences.index', compact('sequences'));
    }

    public function create()
    {
        return view('admin.email-sequences.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'trigger_event' => 'required|string|max:100',
            'active' => 'boolean',
            'delay_days' => 'required|integer|min:0',
        ]);

        $sequence = EmailSequence::create($validated);

        return redirect()->route('admin.email-sequences.edit', $sequence)->with('success', 'Email sequence created. Now add emails to the sequence.');
    }

    public function edit(EmailSequence $emailSequence)
    {
        $emailSequence->load('emails');
        return view('admin.email-sequences.edit', compact('emailSequence'));
    }

    public function update(Request $request, EmailSequence $emailSequence)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'trigger_event' => 'required|string|max:100',
            'active' => 'boolean',
            'delay_days' => 'required|integer|min:0',
        ]);

        $emailSequence->update($validated);

        return redirect()->route('admin.email-sequences.edit', $emailSequence)->with('success', 'Email sequence updated successfully.');
    }

    public function destroy(EmailSequence $emailSequence)
    {
        $emailSequence->delete();
        return redirect()->route('admin.email-sequences.index')->with('success', 'Email sequence deleted successfully.');
    }

    public function addEmail(Request $request, EmailSequence $emailSequence)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'content' => 'required|string',
            'delay_days' => 'required|integer|min:0',
            'order' => 'nullable|integer',
        ]);

        $maxOrder = $emailSequence->emails()->max('order') ?? 0;
        $validated['order'] = $validated['order'] ?? ($maxOrder + 1);

        $emailSequence->emails()->create($validated);

        return redirect()->route('admin.email-sequences.edit', $emailSequence)->with('success', 'Email added to sequence.');
    }

    public function deleteEmail(EmailSequenceEmail $emailSequenceEmail)
    {
        $sequenceId = $emailSequenceEmail->email_sequence_id;
        $emailSequenceEmail->delete();

        return redirect()->route('admin.email-sequences.edit', $sequenceId)->with('success', 'Email removed from sequence.');
    }
}
