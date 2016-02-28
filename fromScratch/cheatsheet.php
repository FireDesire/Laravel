<?php
/**
 * Project: fromScratch
 * Author: Bozhidar Tyanev
 * Date: 27.2.2016 г.
 * Time: 11:23 ч.
 */

/**
 * Passing parameters in the Route
 */
$people = ['stuff'];

return view('welcome')->with('people', $people);
return view('welcome')->with(['people' => $people]);
return view('welcome')->withPeople($people);
return view('welcome', compact('people'));
return View::make();
return view('welcome', []);