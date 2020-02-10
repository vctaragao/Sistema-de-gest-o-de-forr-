<?php

namespace App\Http\Controllers;

use App\DataTables\LessonDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateLessonRequest;
use App\Http\Requests\UpdateLessonRequest;
use App\Repositories\LessonRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class LessonController extends AppBaseController
{
    /** @var  LessonRepository */
    private $lessonRepository;

    public function __construct(LessonRepository $lessonRepo)
    {
        $this->lessonRepository = $lessonRepo;
    }

    /**
     * Display a listing of the Lesson.
     *
     * @param LessonDataTable $lessonDataTable
     * @return Response
     */
    public function index(LessonDataTable $lessonDataTable)
    {
        return $lessonDataTable->render('lessons.index');
    }

    /**
     * Show the form for creating a new Lesson.
     *
     * @return Response
     */
    public function create()
    {
        return view('lessons.create');
    }

    /**
     * Store a newly created Lesson in storage.
     *
     * @param CreateLessonRequest $request
     *
     * @return Response
     */
    public function store(CreateLessonRequest $request)
    {
        $input = $request->all();

        $lesson = $this->lessonRepository->create($input);

        Flash::success('Lesson saved successfully.');

        return redirect(route('lessons.index'));
    }

    /**
     * Display the specified Lesson.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lesson = $this->lessonRepository->find($id);

        if (empty($lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('lessons.index'));
        }

        return view('lessons.show')->with('lesson', $lesson);
    }

    /**
     * Show the form for editing the specified Lesson.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lesson = $this->lessonRepository->find($id);

        if (empty($lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('lessons.index'));
        }

        return view('lessons.edit')->with('lesson', $lesson);
    }

    /**
     * Update the specified Lesson in storage.
     *
     * @param  int              $id
     * @param UpdateLessonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLessonRequest $request)
    {
        $lesson = $this->lessonRepository->find($id);

        if (empty($lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('lessons.index'));
        }

        $lesson = $this->lessonRepository->update($request->all(), $id);

        Flash::success('Lesson updated successfully.');

        return redirect(route('lessons.index'));
    }

    /**
     * Remove the specified Lesson from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lesson = $this->lessonRepository->find($id);

        if (empty($lesson)) {
            Flash::error('Lesson not found');

            return redirect(route('lessons.index'));
        }

        $this->lessonRepository->delete($id);

        Flash::success('Lesson deleted successfully.');

        return redirect(route('lessons.index'));
    }
}
