@extends('layout.users.app')
@section('css')
    <style class="css">
       main{
        padding:0;
       } 
       .cont{
        border:1px solid rgba(0,0,0,0.1) !important;
        background:transparent !important;
        border-radius:5px !important;
       }
       .faq{
        width:100%;
        border:1px solid rgba(0,0,0,0.1);
        padding:10px;
        display:flex;
        flex-direction:column;
        gap:10px;
        border-radius:10px;
        background:var(--bg-light);
        user-select: none;

       }
       .faq .answer{
        display:none !important;
       }
       .faq.active .answer{
        display:flex !important;
       }
       .faq svg{
        transition: all ease 0.5s;
        opacity:0.8;
       }
       .faq.active svg{
        transform: rotate(90deg)
       }
      
    </style>
@endsection
@section('title')
    Frequently Asked Questions
@endsection
@section('main')
    <section class="w-full column g-10">
        {{-- HEADER --}}
        <div class="w-full bg-primary primary-text no-select p-20 row align-center space-between g-10">
            <span onclick="spa(event,'{{ url('users/profile') }}')" class="pc-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="20" width="20"><path d="M228,128a12,12,0,0,1-12,12H69l51.52,51.51a12,12,0,0,1-17,17l-72-72a12,12,0,0,1,0-17l72-72a12,12,0,0,1,17,17L69,116H216A12,12,0,0,1,228,128Z"></path></svg>

            </span>
            <strong class="desc"> Frequently Asked Questions</strong>
            <span></span>
        </div>
        {{-- BODY --}}
        <div class="body font-1 p-10 column g-10">
        {{-- faq --}}
        <div class="faq">
            {{-- Question --}}
          <div onclick="
          if(this.closest('.faq').classList.contains('active')){
          this.closest('.faq').classList.remove('active')
          }else{
          this.closest('.faq').classList.add('active')
          }
          " class="row question w-full g-10 align-center space-between">
              <span class="font-1">
                How does the referral bonus work?
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm29.66,109.66-40,40a8,8,0,0,1-11.32-11.32L140.69,128,106.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,157.66,133.66Z"></path></svg>
            </span>
          </div>
          {{-- Answer --}}
          <div style="font-size:0.8rem;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1)" class="p-10 answer br-5 w-full">
            <span>When you invite someone using your referral link and they invest, you earn a percentage bonus based on the platform’s referral structure. Referral rewards are designed to encourage community growth and active participation.</span>
          </div>
            
        </div>


         {{-- faq --}}
        <div class="faq">
            {{-- Question --}}
          <div onclick="
          if(this.closest('.faq').classList.contains('active')){
          this.closest('.faq').classList.remove('active')
          }else{
          this.closest('.faq').classList.add('active')
          }
          " class="row question w-full g-10 align-center space-between">
              <span class="font-1">
                Can I withdraw my earnings anytime?
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm29.66,109.66-40,40a8,8,0,0,1-11.32-11.32L140.69,128,106.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,157.66,133.66Z"></path></svg>
            </span>
          </div>
          {{-- Answer --}}
          <div style="font-size:0.8rem;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1)" class="p-10 answer br-5 w-full">
            <span>Yes. Withdrawals are available once your investment or rewards meet the minimum withdrawal requirement. All withdrawals are manually reviewed to ensure security and accuracy.</span>
          </div>
            
        </div>


          {{-- faq --}}
        <div class="faq">
            {{-- Question --}}
          <div onclick="
          if(this.closest('.faq').classList.contains('active')){
          this.closest('.faq').classList.remove('active')
          }else{
          this.closest('.faq').classList.add('active')
          }
          " class="row question w-full g-10 align-center space-between">
              <span class="font-1">
                What withdrawal amounts are available?
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm29.66,109.66-40,40a8,8,0,0,1-11.32-11.32L140.69,128,106.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,157.66,133.66Z"></path></svg>
            </span>
          </div>
          {{-- Answer --}}
          <div style="font-size:0.8rem;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1)" class="p-10 answer br-5 w-full">
            <span>Users can request withdrawals in the following amounts, subject to balance and approval:
1k, 5k, 10k, 50k, 100k, 500k, 800k, 1m, 5m, and 8m.</span>
          </div>
            
        </div>

        
          {{-- faq --}}
        <div class="faq">
            {{-- Question --}}
          <div onclick="
          if(this.closest('.faq').classList.contains('active')){
          this.closest('.faq').classList.remove('active')
          }else{
          this.closest('.faq').classList.add('active')
          }
          " class="row question w-full g-10 align-center space-between">
              <span class="font-1">
                Is my information and investment secure?
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm29.66,109.66-40,40a8,8,0,0,1-11.32-11.32L140.69,128,106.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,157.66,133.66Z"></path></svg>
            </span>
          </div>
          {{-- Answer --}}
          <div style="font-size:0.8rem;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1)" class="p-10 answer br-5 w-full">
            <span>Yes. We prioritize data protection and user privacy. All personal and financial information is handled with strict confidentiality and security measures.</span>
          </div>
            
        </div>


        
          {{-- faq --}}
        <div class="faq">
            {{-- Question --}}
          <div onclick="
          if(this.closest('.faq').classList.contains('active')){
          this.closest('.faq').classList.remove('active')
          }else{
          this.closest('.faq').classList.add('active')
          }
          " class="row question w-full g-10 align-center space-between">
              <span class="font-1">
                What happens after my investment duration ends?
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" fill="CurrentColor" height="30" width="30"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm29.66,109.66-40,40a8,8,0,0,1-11.32-11.32L140.69,128,106.34,93.66a8,8,0,0,1,11.32-11.32l40,40A8,8,0,0,1,157.66,133.66Z"></path></svg>
            </span>
          </div>
          {{-- Answer --}}
          <div style="font-size:0.8rem;background:rgba(0,0,0,0.05);border:1px solid rgba(0,0,0,0.1)" class="p-10 answer br-5 w-full">
            <span>At the end of your investment period, your capital and earnings are credited according to the plan terms. You may choose to withdraw your funds or reinvest in another plan.</span>
          </div>
            
        </div>

        </div>
    </section>
@endsection
