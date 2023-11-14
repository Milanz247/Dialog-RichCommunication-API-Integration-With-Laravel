<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RichCommunicationAPIService;

class RichCommunicationController extends Controller
{
    protected $richCommunicationService;

    public function __construct(RichCommunicationAPIService $richCommunicationService)
    {
        $this->richCommunicationService = $richCommunicationService;
    }

    public function sendSMS(Request $request)
    {
       
        $numbers = $request->input('numbers');
        $message = $request->input('message');
        $mask = $request->input('mask');
        $campaignName = $request->input('campaignName');

        $response = $this->richCommunicationService->sendSMS($numbers, $message, $mask, $campaignName);

     
        return response()->json($response);
    }

    public function sendViberMessage(Request $request)
    {
        $numbers = $request->input('numbers');
        $image = $request->input('image');
        $caption = $request->input('caption');
        $action = $request->input('action');
        $text = $request->input('text');
        $mask = $request->input('mask');
        $smsText = $request->input('smsText');
        $campaignName = $request->input('campaignName');

        $response = $this->richCommunicationService->sendViberMessage($numbers, $image, $caption, $action, $text, $mask, $smsText, $campaignName);

        return response()->json($response);
    }
}
