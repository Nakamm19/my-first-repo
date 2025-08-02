// qa_icon js変更 -----------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", () => {
  const QaIcon = document.querySelector(".qa_icon");
  const AnswerIcon = document.querySelector(".qa_answer-dt");
  const QaAnswer = document.querySelector(".qa_answer-dd");

  const menu = document.querySelector(".hamburger_menu");
  const QaLaber = document.querySelector(".qa_laber");

  // ハンバーガーメニューをクリックした時にイベント発生
  menu.addEventListener("click", () => {
    menu.classList.toggle("hamburger_menu_active");
  });

  //QAアイコンをクリックした時にイベント発生
  QaIcon.addEventListener("click", () => {
    QaIcon.classList.toggle("qa_icon_active");
    QaLaber.classList.toggle("qa_laber_active");
    AnswerIcon.classList.toggle("qa_answer-dt_active");
    QaAnswer.classList.toggle("qa_answer-dd_active");
  });
});






// jsss
document.addEventListener("DOMContentLoaded", () => {
  const selectedValue = document.querySelector(".selected-value");
  const optionsContainer = document.querySelector(".options-container");
  const radioButtons = document.querySelectorAll(
    '.options-container input[type="radio"]'
  );
  const selectedValueTextSpan = selectedValue.querySelector("span"); // span要素を取得

  // 選択項目をクリックしたときの処理
  selectedValue.addEventListener("click", () => {
    optionsContainer.classList.toggle("active"); // activeクラスを付け外しする
  });

  // 各ラジオボタンを選択したときの処理
  radioButtons.forEach((radio) => {
    radio.addEventListener("change", () => {
      // 選択されたラジオボタンの親要素（label）のテキストを selectedValue の span に表示
      selectedValueTextSpan.textContent = radio.parentNode.textContent.trim();
      optionsContainer.classList.remove("active"); // 選択したら選択肢を非表示にする
    });
  });

  // ドキュメント全体をクリックしたときの処理（選択肢以外をクリックしたら閉じる）
  document.addEventListener("click", (event) => {
    // クリックされた要素が selectedValue または optionsContainer の子孫でない場合
    if (
      !selectedValue.contains(event.target) &&
      !optionsContainer.contains(event.target)
    ) {
      optionsContainer.classList.remove("active");
    }
  });
});
