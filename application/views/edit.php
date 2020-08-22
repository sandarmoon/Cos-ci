<div class="col-lg-10 mb-5">

                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    
                    <div class="card-header justify-content-center">
                        <h3 class="font-weight-light my-4 text-center"> Edit </h3>
                    </div>

                    <form action="<?= site_url('suggest/update') ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $suggest['id']?>">
                    
                        <div class="card-body">
                            <div class="row my-3">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputName"> 
                                            Full Name / <span class="mmfont"> အမည်အပြည့်အစုံ </span>
                                        </label>
                                        <input class="form-control" id="inputName" type="text" placeholder="Enter Your Name" name="name" value="<?= $suggest['username'] ?>" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="careerlife"> 
                                            Developer career life
                                            <span class="mmfont">  ကို ဘယ်လိုထင်မြင်မိပါသလဲ။ </span>
                                        </label>
                                        <input class="form-control" id="careerlife" type="text" placeholder="Enter Your Suggestion" name="careerlife"  value="<?= $suggest['suggest_one'] ?>"/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="fileerror"> 
                                            <span class="mmfont"> မိမိ အနေနဲ့ file ၁ခု run လို့ Error တတ်တာမြင်ရင် ဘာအရင်လုပ်မလဲ။ </span>
                                        </label>
                                        <input class="form-control" id="fileerror" type="text" placeholder="Enter Your Suggestion" name="fileerror" value="<?= $suggest['suggest_two'] ?>" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="teamwork"> 
                                            <span class="mmfont"> Teamwork နဲ့အလုပ်လုပ်တဲ့အခါ ဘယ်အချက်က အရေးကြီးဆုံးလို့ထင်လဲ။ </span>
                                        </label>
                                        <input class="form-control" id="teamwork" type="text" placeholder="Enter Your Suggestion" name="teamwork" value="<?= $suggest['suggest_three'] ?>"/>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="teamwork"> 
                                            <span class="mmfont"> အခုတလော စိတ်ညစ်စရာပြဿနာလေး (stress)၁ခုလောက် ပြောပြပါဦး။ အဲ့ဒီ စိတ်ညစ်စရာကို မိမိအနေနဲ့ ဘယ်လို ကိုင်တွယ်ဖြေရှင်းခဲ့လဲ။ </span>
                                        </label>
                                        <textarea class="form-control" name="stress"><?= $suggest['suggest_four'] ?></textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="rolemodel"> 
                                            <span class="mmfont"> မိမိ ရဲ့ role model က ဘယ်သူလဲ။ ဘာကြောင့်သူ့ကို role model အဖြစ် သတ်မှတ်ထားတာလဲ။ </span>
                                        </label>
                                        <input class="form-control" id="rolemodel" type="text" placeholder="Enter Your Suggestion" name="rolemodel" value="<?= $suggest['suggest_five'] ?>" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="phapplication"> 
                                            <span class="mmfont"> ဖုန်း application ဖြစ်ဖြစ် website ဖြစ်ဖြစ် ရုတ်တရက် ရပ် သွားတဲ့ အခါမျိုးမှာ မိမိအနေနဲ့ ဘာလုပ်မလဲ။ </span>
                                        </label>
                                        <input class="form-control" id="phapplication" type="text" placeholder="Enter Your Suggestion" name="phapplication" value="<?= $suggest['suggest_six'] ?>" />
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="small mb-1" for="website"> 
                                            <span class="mmfont"> ဘယ်လို website မျိုးကို ရေးချင်နေပါသလဲ။ </span>
                                        </label>
                                        <input class="form-control" id="website" type="text" placeholder="Enter Your Suggestion" name="website" value="<?= $suggest['suggest_seven'] ?>" />
                                    </div>
                                </div>

                            </div>

                            <div class="text-center px-5 pb-4">

                                <button class="btn btn-block btn-outline-dark" type="submit"> Send Feedback </button>

                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>