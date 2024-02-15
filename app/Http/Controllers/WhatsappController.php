<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WhatsappController extends Controller
{
    public function sendWhatsappMessage(Request $request,$id)
    {
        // Retrieve the question with the given ID
        $question = Question::findOrFail($id);

        // Get the phone number from the question
        $phoneNumber = $question->phonenum;

        
        // Use the retrieved phone number in the WhatsApp message
        $response = Http::withOptions(['verify' => false])->withHeaders([
            'Authorization' => '#Yv@5atHpS5itcD_RFGF', // Replace with your actual token
        ])->post('https://api.fonnte.com/send', [
            'target' => $phoneNumber,
            'message' => 'Soalan anda di eFatwaInsight telah dijawab, berikut adalah jawapannya:' . "\n\n" . $question->answer,
            'countryCode' => $request->input('countryCode', '60'),
        ]);

        if ($response->failed()) {
            return response()->json(['error' => $response->body()], $response->status());
        } else {
            return response()->json(['response' => $response->body()]);
        }
    }
}
