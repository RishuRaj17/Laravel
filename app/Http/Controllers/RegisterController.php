<?php
    class RegisterController extends Controller{
        public function register(Request $request){
            
            $validated_data=$request->validate([
                'name' => 'required|regex:/^[A-Z]+$/i[string]|max:225',
                'email' => 'required|email|unique:Users,email]',
                'phone' => 'nullable|numeric',
                'dob' => 'required|date|before:-18 years',
                'password' => 'required|string|min:8|max:255|confirmed',
                'image' => 'rquired|image|mimes:jpeg,png,jpg,gif|max:2048'
            ]);
            return validated_data;
        }
    }

?>