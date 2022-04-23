<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\Lesson;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function update(Request $request, $id)
    {
        $document = Document::find($id);
        $lesson = Lesson::find($document->lesson_id);
        $document->status = 1;
        $document->update();
        $lesson->caculateProgress();
        $lesson->update();
        return redirect()->route('courses.lessons.show', [$lesson->course_id, $document->lesson_id]);
    }
}
