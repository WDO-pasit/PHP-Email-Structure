  const viewer = document.querySelector('model-viewer');
//ไปจับ tag <model-viewer> ใน HTML มาเก็บไว้ในตัวแปร viewer เพื่อเรียกใช้ภายหลัง

  document.addEventListener('mousemove', (e) => { //	ดักฟังเหตุการณ์ mousemove บนทั้งหน้า
    const x = e.clientX / window.innerWidth - 0.5;
    const y = e.clientY / window.innerHeight - 0.5;
//แปลงตำแหน่งแนวนอนของเมาส์ให้อยู่ในช่วง -0.5 ถึง 0.5 (ซ้าย -0.5, ขวา +0.5)
//แปลงตำแหน่งแนวตั้งของเมาส์ให้เป็นค่า -0.5 ถึง 0.5 (บน -0.5, ล่าง +0.5)
    const azimuth = x * -180; // ซ้ายขวา เอาค่า X ที่ได้มาคูณ 180 เพื่อเปลี่ยนเป็นมุมหมุนซ้าย-ขวา
    const elevation = y * -30 + 60; // เงยกล้องขึ้น 10° // ขึ้นลง เอาค่า Y มาคูณ -30 เพื่อควบคุมการเงย/ก้มกล้อง (คว่ำหัวลง = มุมติดลบ)

    viewer.cameraOrbit = `${azimuth}deg ${elevation}deg auto`; //สั่งให้หมุนกล้องโดยใส่มุม azimuth (แนวนอน) และ elevation (แนวตั้ง)
  });