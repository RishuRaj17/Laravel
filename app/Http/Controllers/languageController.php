<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


    class languageController extends controller{
        
        public function showSelectLanguageForm()
        {
            return view('select-language'); 
        }
    
        
        public function setLanguage(Request $request)
        {
            
            $request->validate([
                'language' => 'required|string',
            ]);
    
            
            session(['preferred_language' => $request->input('language')]);
    
            
            return redirect()->back()->with('success', 'Language preference saved successfully!');
        } 

    }

?>