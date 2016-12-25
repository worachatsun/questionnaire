<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>แบบสอบถามผู้ใช้บัณฑิตที่มา Firm Presentation | SIT KMUTT</title>
    <link rel="stylesheet" type="text/css" href="{{asset('semantic/out/semantic.min.css')}}">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="{{asset('semantic/out/semantic.min.js')}}"></script>
    <script src="{{asset('semantic/out/components/dropdown.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('semantic/out/components/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('semantic/out/components/site.css')}}">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/site.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/container.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/grid.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/header.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/image.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/menu.css">
    <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/divider.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/segment.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/form.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/input.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/button.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/list.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/message.css">
    <link rel="stylesheet" type="text/css" href="semantic/out/components/icon.css">
    <script src="semantic/out/components/form.js"></script>
    <script src="semantic/out/components/transition.js"></script>
    <script src="semantic/out/components/visibility.js"></script>
    <script src="semantic/out/components/sidebar.js"></script>
    <script src="semantic/out/components/transition.js"></script>
  </head>
  <style type="text/css">
    body{
      font-family: 'Athiti', sans-serif;
      font-size: 18px;
    }
    h1,h2,h3,h4,h5,h6{
      font-family: 'Athiti', sans-serif;
    }
    .ui.form .field > label{
      font-size: 18px;
    }
    .ui.checkbox input.hidden+label {
      font-size: 18px;
    }
    .ui.vertical.stripe p{
      font-size: 2em !important;
    }
    .ui.form input[type="text"]{
      font-family: 'Athiti', sans-serif;
    }
    .ui.inverted.segment{
      background-image: url('img/bg.jpg');
      background-size: cover;
    }
    .hidden.menu {
      display: none;
    }
    .ui.primary.button{
      font-family: 'Athiti', sans-serif;
    }
    .masthead.segment {
      min-height: 700px;
      padding: 1em 0em;
    }
    .masthead .logo.item img {
      margin-right: 1em;
    }
    .masthead .ui.menu .ui.button {
      margin-left: 0.5em;
    }
    .masthead h1.ui.header {
      margin-top: 3em;
      margin-bottom: 0em;
      font-size: 4em;
      font-weight: normal;
    }
    .masthead h3.ui.header {
      margin-top: 5em;
      margin-bottom: 0em;
      font-size: 2em;
      font-weight: normal;
      font-family: 'Athiti', sans-serif;
    }
    .masthead h2 {
      font-size: 1.7em;
      font-weight: normal;
    }

    .ui.vertical.stripe {
      padding: 8em 0em;
    }
    .ui.vertical.stripe h3 {
      font-size: 2em;
    }
    .ui.vertical.stripe .button + h3,
    .ui.vertical.stripe p + h3 {
      margin-top: 3em;
    }
    .ui.vertical.stripe .floated.image {
      clear: both;
    }
    .ui.vertical.stripe p {
      font-size: 1.33em;
    }
    .ui.vertical.stripe .horizontal.divider {
      margin: 3em 0em;
    }

    .quote.stripe.segment {
      padding: 0em;
    }
    .quote.stripe.segment .grid .column {
      padding-top: 5em;
      padding-bottom: 5em;
    }

    .footer.segment {
      padding: 5em 0em;
    }

    .secondary.pointing.menu .toc.item {
      display: none;
    }

    @media only screen and (max-width: 700px) {
      .ui.fixed.menu {
        display: none !important;
      }
      .secondary.pointing.menu .item,
      .secondary.pointing.menu .menu {
        display: none;
      }
      .secondary.pointing.menu .toc.item {
        display: block;
      }
      .masthead.segment {
        min-height: 350px;
      }
      .masthead h1.ui.header {
        font-size: 2em;
        margin-top: 1.5em;
      }
      .masthead h2 {
        margin-top: 0.5em;
        font-size: 1.5em;
      }
    }
    .ui.basic.table{
      text-align: center;
      font-size: 18px;
    }
    .ui.basic.table .content {
      text-align: left;
    }


  </style>
  <script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.masthead')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.fixed.menu').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.fixed.menu').transition('fade out');
          }
        })
      ;
      $('.ui.checkbox')
        .checkbox()
      ;

    })
  ;
  </script>
</head>
<body>

  <!-- Page Contents -->
  <div class="pusher">
    <div class="ui inverted vertical masthead center aligned segment">
      <div class="ui text container">
        <h3 class="ui inverted header">
          <center>
            <img src="{{ URL::asset('/img/logo.png') }}" class="image" width="35%"><br />
          </center>
          แบบสอบถามผู้ใช้บัณฑิตที่มา Firm Presentation
        </h3>
        <h4>ทางคณะเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ขอความอนุเคราะห์จากผู้ใช้บัณฑิต (นายจ้าง/ผู้บังคับบัญชา) กรอกแบบสอบถาม “การสำรวจความพึงพอใจของผู้ใช้บัณฑิต” เพื่อนำผลที่ได้ไปปรับปรุงหลักสูตรการเรียนการสอนและการบริการต่าง ๆ ของคณะฯ ทำให้กระบวนการจัดการศึกษาของคณะ ฯ เป็นไปอย่างมีประสิทธิภาพ และสามารถผลิตบัณฑิตที่มีคุณลักษณะอันพึงประสงค์ตรงกับความต้องการของสังคมต่อไป
        </h4>
        <a href="#questionnaire"><div class="ui huge primary button">เริ่มทำแบบสอบถาม <i class="right arrow icon"></i></div></a>
      </div>

    </div>
    <div class="ui vertical stripe segment" id="questionnaire">
      <div class="ui container">
          {{ Form::open(array('url' => '/form','class'=>'ui form')) }}
            <p>ข้อมูลทั่วไปเกี่ยวกับบริษัท</p>
            <div class="one fields">
              <div class="sixteen wide field">
                <label>บริษัท</label>
                <input placeholder="กรอกชื่อบริษัท" name="company" type="text">
              </div>
            </div>
            <div class="five fields">
              <div class="three wide field">
                <label>เลขที่ตั้ง</label>
                <input placeholder="กรอกเลขที่ตั้ง" name="number" type="text">
              </div>
              <div class="two wide field">
                <label>หมู่ที่</label>
                <input placeholder="กรอกหมู่ที่" name="village" type="text">
              </div>
              <div class="five wide field">
                <label>อาคาร</label>
                <input placeholder="กรอกอาคาร" name="building" type="text">
              </div>
              <div class="two wide field">
                <label>ชั้นที่</label>
                <input placeholder="กรอกชั้นที่" name="floor" type="number">
              </div>
              <div class="four wide field">
                <label>ถนน</label>
                <input placeholder="กรอกถนน" name="road" type="text">
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label>แขวง</label>
                <input placeholder="กรอกแขวง" name="subarea" type="text">
              </div>
              <div class="four wide field">
                <label>เขต</label>
                <input placeholder="กรอกเขต" name="area" type="text">
              </div>
              <div class="four wide field">
                <label>จังหวัด</label>
                <input placeholder="กรอกจังหวัด" name="province" type="text">
              </div>
              <div class="four wide field">
                <label>รหัสไปรษณีย์</label>
                <input placeholder="กรอกรหัสไปรษณีย์" name="zip" type="number">
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <label>เบอร์โทรศัพท์</label>
                <input placeholder="กรอกเบอร์โทรศัพท์" name="tel" type="text">
              </div>
              <div class="eight wide field">
                <label>E-mail</label>
                <input placeholder="กรอกอีเมล์" name="email" type="email">
              </div>
            </div>
            <div class="ui horizontal divider">ต่อ</div>
            <p>ข้อมูลทั่วไปเกี่ยวกับผู้กรอก</p>
            <div class="three fields">
              <div class="four wide field">
                <label>คำนำหน้าชื่อ</label>
                <select class="ui dropdown" name="title">
                  <option value="">เลือกคำนำหน้าชื่อ</option>
                  <option value="mr">นาย</option>
                  <option value="miss">นางสาว</option>
                  <option value="mrs">นาง</option>
                </select>
              </div>
              <div class="six wide field">
                <label>ชื่อ</label>
                <input placeholder="ชื่อจริง" name="name" type="text">
              </div>
              <div class="six wide field">
                <label>นามสกุล</label>
                <input placeholder="นามสกุลจริง" name="surname" type="text">
              </div>
            </div>
            <div class="two fields">
              <div class="field">
                <label>แผนก/ฝ่าย/กอง</label>
                <input name="section" type="text">
              </div>
              <div class="field">
                <label>ตำแหน่งงาน</label>
                <input type="text" name="position">
              </div>
            </div>
            <div class="ui horizontal divider">ต่อ</div>
            <p>นักศึกษาคณะเทคโนโลยีสารสนเทศ มจธ. ที่ทำงานอยู่ในบริษัททั้งหมดกี่คน โดยแบ่งออกเป็น</p>
            <div class="four fields">
              <div class="four wide field">
                <label>ระดับปริญญาตรี</label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรเทคโนโลยีสารสนเทศ</label>
              </div>
              <div class="four wide field">
                <input placeholder="จำนวน" name="bscit" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรวิทยาการคอมพิวเตอร์</label>
              </div>
              <div class="four wide field">
                <input placeholder="จำนวน" name="bsccs" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label>ระดับปริญญาโท</label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรเทคโนโลยีสารสนเทศ</label>
              </div>
              <div class="four wide field">
                <input placeholder="จำนวน" name="mscit" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรวิทยาการคอมพิวเตอร์</label>
              </div>
              <div class="four wide field">
                <input placeholder="จำนวน" name="msccs" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรวิศวกรรมซอฟต์แวร์</label>
              </div>
              <div class="four wide field">
                <input placeholder="จำนวน" name="mscse" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="four fields">
              <div class="four wide field">
                <label></label>
              </div>
              <div class="four wide field">
                <label>หลักสูตรระบบสารสนเทศทางธุรกิจ</label>
              </div>
              <div class="four wide field">
                <input placeholder="จำนวน" name="mscbis" type="text">
              </div>
              <div class="four wide field">
                <label>คน</label>
              </div>
            </div>
            <div class="ui horizontal divider">ต่อ</div>
            <p>เหตุผลสำคัญที่ท่านรับบัณฑิตที่จบจากคณะเทคโนโลยีสารสนเทศ มจธ. เข้าทำงานคือข้อใด</p>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason1">
                    <label>1. ชื่อเสียงของคณะเทคโนโลยีสารสนเทศ มจธ. </label>
                  </div>
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  <div>
                    <label style="font-size:18px;">7. ทักษะทางด้าน Soft Skill </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason2">
                    <label>2. ผลการศึกษา (เกรดเฉลี่ย) ที่จบเป็นที่พอใจ </label>
                  </div>
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason71">
                    <label style="font-size:18px;">การติดต่อสื่อสาร </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason3">
                    <label>3. ผลคะแนนการสอบเข้าทำงาน </label>
                  </div>
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason72">
                    <label style="font-size:18px;">มองโลกในแง่ดี </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason4">
                    <label>4. Certificate </label>
                  </div>
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason73">
                    <label style="font-size:18px;">การทำงานร่วมกับผู้อื่น</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason5">
                    <label>5. ภาษาอังกฤษ </label>
                  </div>
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason74">
                    <label style="font-size:18px;">การมีสัมมาคารวะ / รู้จักกาลเทศะ </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason6">
                    <label>6. ความรู้ความสามารถตรงกับความต้องการ </label>
                  </div>
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason75">
                    <label style="font-size:18px;">บุคลิกภาพดี</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="three fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="five wide field">
                <div class="inline field">
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="ui checkbox">
                    <input type="checkbox" tabindex="0" class="hidden" name="reason76">
                    <label style="font-size:18px;">มีลักษณะของการเป็นผู้นำอื่นๆ โปรดระบุ </label>
                  </div>
                </div>
              </div>
              <div class="three wide field">
                <input placeholder="ระบุ" type="text" name="reason76add">
              </div>
            </div>
            <div class="two fields">
              <div class="eight wide field">
                <div class="inline field">
                  <div class="">
                  </div>
                </div>
              </div>
              <div class="eight wide field">
                <div class="inline field">
                  <div class="">
                    <label style="font-size:18px;">8. อื่นๆ </label>
                    <input placeholder="ระบุ" type="text" name="reason8">
                  </div>
                </div>
              </div>
            </div>
            <div class="ui horizontal divider">ต่อ</div>
            <p>เพื่อให้บัณฑิตเป็นที่ต้องการของตลาดแรงงานมากขึ้น ท่านคิดว่าทางคณะเทคโนโลยีสารสนเทศควรเน้นเนื้อหาวิชาการหรือทักษะด้านใดเพิ่มเติมบ้าง กรุณาใส่เลขเรียงลำดับ 1 - 5 (1 คือเน้นมากที่สุด)</p>
            <div class="two fields">
              <div class="three fields">
                  <div class="two wide field">
                    <input placeholder="" name="want1" type="number">
                  </div>
                  <div class="eight wide field">
                  <span style="font-size:18px;">
                    1. ใบประกาศนียบัตร / ใบรับรอง วิชาชีพทางด้าน IT (กรุณาระบุ)
                  </span>
                  </div>
                  <div class="five wide field">
                    <input placeholder="ระบุ" name="want1add" type="text">
                  </div>
              </div>
              <div class="eight wide field">
                <div class="two fields">
                    <div class="two wide field">
                      <input placeholder="" name="want7" type="number">
                    </div>
                    <div class="ten wide field">
                    <span style="font-size:18px;">
                      7. ความสามารถในการทำงานร่วมกับผู้อื่น และแก้ไขปัญหาการทำงานได้เป็นอย่างดี
                    </span>
                    </div>
                  </div>
              </div>
            </div>
            <div class="two fields">
              <div class="three fields">
                  <div class="two wide field">
                    <input placeholder="" name="want2" type="number">
                  </div>
                  <div class="eight wide field">
                  <span style="font-size:18px;">
                    2. การติดต่อสื่อสารด้วยภาษาต่างประเทศ (เช่น จีน อังกฤษ ญี่ปุ่น เป็นต้น)
                  </span>
                  </div>
              </div>
              <div class="eight wide field">
                <div class="two fields">
                    <div class="two wide field">
                      <input placeholder="" name="want8" type="number">
                    </div>
                    <div class="ten wide field">
                    <span style="font-size:18px;">
                      8. ความขยัน อนทนต่อการทำงาน
                    </span>
                    </div>
                  </div>
              </div>
            </div>
            <div class="two fields">
              <div class="three fields">
                  <div class="two wide field">
                    <input placeholder="" name="want3" type="number">
                  </div>
                  <div class="eight wide field">
                  <span style="font-size:18px;">
                    3. ความรู้ด้านระบบคอมฯ / เทคโนโลยีที่ทันสมัย เช่น
                  </span>
                  </div>
                  <div class="five wide field">
                    <input placeholder="ระบุ" name="want3add" type="text">
                  </div>
              </div>
              <div class="eight wide field">
                <div class="two fields">
                    <div class="two wide field">
                      <input placeholder="" name="want9" type="number">
                    </div>
                    <div class="ten wide field">
                    <span style="font-size:18px;">
                      9. การประยุกต์วิชาที่เรียนใช้ในการทำงาน
                    </span>
                    </div>
                  </div>
              </div>
            </div>
            <div class="two fields">
              <div class="two fields">
                  <div class="two wide field">
                    <input placeholder="" name="want4" type="number">
                  </div>
                  <div class="ten wide field">
                  <span style="font-size:18px;">
                    4. การลงมือปฎิบัติงานในสภานที่จริง
                  </span>
                  </div>
              </div>
              <div class="eight wide field">
                <div class="two fields">
                    <div class="two wide field">
                      <input placeholder="" name="want10" type="number">
                    </div>
                    <div class="ten wide field">
                    <span style="font-size:18px;">
                      10. เน้นให้รอบรู้ทั้งทฤษฎีและปฎิบัติ
                    </span>
                    </div>
                  </div>
              </div>
            </div>
            <div class="two fields">
              <div class="two fields">
                  <div class="two wide field">
                    <input placeholder="" name="want5" type="number">
                  </div>
                  <div class="ten wide field">
                  <span style="font-size:18px;">
                    5. ความเป็นผู้นำและกล้าแสดงออกอย่างสร้างสรรค์ต่อหน้าสาธารณชน
                  </span>
                  </div>
              </div>
              <div class="eight wide field">
                <div class="two fields">
                    <div class="two wide field">
                      <input placeholder="" name="want11" type="number">
                    </div>
                    <div class="ten wide field">
                    <span style="font-size:18px;">
                      11. ความรับผิดชอบและมีระเบียนวินัย
                    </span>
                    </div>
                  </div>
              </div>
            </div>
            <div class="two fields">
              <div class="two fields">
                  <div class="two wide field">
                    <input placeholder="" name="want6" type="number">
                  </div>
                  <div class="ten wide field">
                  <span style="font-size:18px;">
                    6. คุณธรรม จริยธรรม จรรยาบรรณในวิชาชีพ
                  </span>
                  </div>
              </div>
              <div class="eight wide field">
                <div class="three fields">
                    <div class="two wide field">
                      <input placeholder="" name="want12" type="number">
                    </div>
                    <div class="three wide field">
                    <span style="font-size:18px;">
                      12. อื่นๆ
                    </span>
                    </div>
                    <div class="ten wide field">
                      <input placeholder="ระบุ" name="want12add" type="text">
                    </div>
                </div>
              </div>
            </div>
            <div class="ui horizontal divider">ต่อ</div>
            <p>แสดงความคิดเห็นต่อผลการดำเนินการการเรียนการสอนระดับปริญญาตรี <br /></be>(รายละเอียดหลักสูตรตามเอกสาร <a href="">คลิกที่นี่</a> เพื่อดาวน์โหลดเอกสาร)</p>
            <table class="ui basic table">
            	<tbody>
            		<tr>
            			<td rowspan="3">
                      การประเมินจากผู้มีส่วนเกี่ยวข้อง
                  </td>
            			<td colspan="6">
                      ปริญญาตรี
                  </td>
            		</tr>
            		<tr>
            			<td colspan="3">
                      หลักสูตรเทคโนโลยีสารสนเทศ
                  </td>
            			<td colspan="3">
                      หลักสูตรวิทยาการคอมพิวเตอร์
                  </td>
            		</tr>
            		<tr>
            			<td>ควรปรับปรุง</td>
            			<td>ดี</td>
            			<td>ดีมาก</td>
            			<td>ควรปรับปรุง</td>
            			<td>ดี</td>
            			<td>ดีมาก</td>
            		</tr>
            		<tr>
            			<td class="content">เนื้อหาของหลักสูตรจัดได้อย่างเหมาะสม รายวิชาบังคับของหลักสูตรที่ต้องปูพื้นฐานด้านเทคโนโลยีสารสนเทศและสร้างความเชื่อมโยงระหว่างภาคทฤษฎีและปฏิบัติ มีปฏิบัติการ แบบฝึกหัด โครงงาน และกรณีศึกษาให้นักศึกษาเข้าใจการประยุกต์องค์ความรู้กับปัญหาจริง </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="1it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="1it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="1it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="1cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="1cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="1cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีคุณธรรม จริยธรรม ถ่อมตนและทำหน้าที่เป็นพลเมืองดี รับผิดชอบต่อตนเอง</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="2it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="2it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="2it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="2cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="2cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="2cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความรู้พื้นฐานด้านเทคโนโลยีสารสนเทศทั้งภาคทฤษฎีและภาคปฎิบัติอยู่ในเกณฑ์ดี สามารถประยุกต์ได้อย่างเหมาะสมในการประกอบวิชาชีพ </td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="3it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="3it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="3it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="3cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="3cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="3cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความรู้ทันสมัย ใฝ่รู้ และมีความสามารถพัฒนาความรู้ เพื่อพัฒนาตนเองในด้านเฉพาะที่สนใจ </td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="4it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="4it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="4it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="4cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="4cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="4cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษาคิดเป็น ทำเป็น และเลือกวิธีการแก้ปัญหาได้อย่างเป็นระบบและเหมาะสม</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="5it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="5it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="5it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="5cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="5cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="5cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความสามารถทำงานร่วมกับผู้อื่น มีทักษะการบริหารจัดการและทำงานเป็นหมู่คณะ</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="6it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="6it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="6it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="6cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="6cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="6cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษารู้จักแสวงหาความรู้ด้วยตนเองและสามารถติดต่อสื่อสารกับผู้อื่นได้เป็นอย่างดี</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="7it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="7it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="7it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="7cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="7cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="7cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความสามารถในการใช้ภาษาไทยและภาษาต่างประเทศในการสื่อสารและใช้เทคโนโลยีได้ดี</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="8it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="8it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="8it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="8cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="8cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="8cs" value="3">
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">นักศึกษามีความสามารถวิเคราะห์ ออกแบบ พัฒนา ติดตั้ง และปรับปรุงระบบคอมพิวเตอร์ให้ตรงตามข้อกำหนด</td>
                  <td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="9it" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="9it" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="9it" value="3">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="9cs" value="1">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="9cs" value="2">
                    </div>
                  </td>
            			<td>
                    <div class="ui radio checkbox">
                      <input type="radio" name="9cs" value="3">
                    </div>
                  </td>
            		</tr>
            	</tbody>
            </table>
            <div class="ui horizontal divider">ต่อ</div>
            <table class="ui basic table">
            	<tbody>
            		<tr>
            			<td>ข้อเสนอแนะเพิ่มเติม</td>
            			<td>หลักสูตรเทคโนโลยีสารสนเทศ</td>
            			<td>หลักสูตรวิทยาการคอมพิวเตอร์</td>
            		</tr>
            		<tr>
            			<td rowspan="3">จุดแข็ง</td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="s1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="s1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="s2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="s2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="s3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="s3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td rowspan="3">จุดอ่อน</td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="w1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="w1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="w2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="w2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="w3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="w3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td rowspan="3">ควรปรับปรุง</td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="im1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="im1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="im2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="im2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="im3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="im3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td rowspan="3">ข้อเสนอแนะ</td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="su1it" type="text">
                        </div>
                    </div>
                  </td>
                  <td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">1.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="su1cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="su2it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">2.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="su2cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            		<tr>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="su3it" type="text">
                        </div>
                    </div>
                  </td>
            			<td class="content">
                    <div class="three fields">
                        <div class="two wide field">
                          <span style="margin-top:2%;">3.</span>
                        </div>
                        <div class="fourteen wide field">
                          <input placeholder="ระบุ" name="su3cs" type="text">
                        </div>
                    </div>
                  </td>
            		</tr>
            	</tbody>
            </table>
            <center>
              <button type="submit" class="ui primary submit button"><span style="font-size:18px;">ส่งแบบสอบถาม</span></button>
            </center>
            <div class="ui error message"></div>
          {{ Form::close() }}
      </div>
    </div>


    <div class="ui inverted vertical footer segment">
      <div class="ui container">
        <div class="ui stackable inverted divided equal height stackable grid">
          <div class="thirteen wide column">
            <img src="img/logo.png" class="image" width="20%">
            <h4>School of Information Technology, <br />
                King Mongkut's University of Technology Thonburi<br />
                126 Pracha Uthit Rd., Bang Mod, Thung Khru, Bangkok, Thailand 10140</h4>
            <h5>โทร. 0-2470-9889</h5>
          </div>
          <div class="three wide column">
            <h4 class="ui inverted header">Made by </h4>
            <p>Kunchai Sodhom</p>
            <p>Taro </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
  <script>
  $('.ui.dropdown')
  .dropdown();

  //validation
  //$('.ui.form')
  // .form({
  //   fields: {
  //     //section 1
  //     // company       : 'empty',
  //     // number        : 'empty',
  //     // village       : 'empty',
  //     // building      : 'empty',
  //     // floor         : ['minLength[2]', 'empty'],
  //     // road          : 'empty',
  //     // subarea       : 'empty',
  //     // area          : 'empty',
  //     // province      : 'empty',
  //     // zip           : ['minLength[5]', 'empty'],
  //     // tel           : ['minLength[9]', 'empty'], //ไม่ต้องใส่ขีด
  //     // email         : 'empty',
  //     // title         : 'empty',
  //     // name          : 'empty',
  //     // surname       : 'empty',
  //     // section       : 'empty',
  //     // position      : 'empty',
  //     //section 2
  //     // bscit         : 'empty',
  //     // bsccs         : 'empty',
  //     // mscit         : 'empty',
  //     // msccs         : 'empty',
  //     // mscse         : 'empty',
  //     // mscbis        : 'empty'
  //     //section 3
  //
  //     //section 4
  //
  //
  // })
//;
  </script>
</html>
