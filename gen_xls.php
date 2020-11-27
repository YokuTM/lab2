<?php
require_once'connect.php';
    require_once('php_excel/Classes/PHPExcel.php');
    require_once('php_excel/Classes/PHPExcel/Writer/Excel2007.php');

    // Запрос на выборку сведений о пользователях
    $result = mysqli_query($mysql,"SELECT
        student.full_name as full_name,
        student.faculty as faculty,
        student.groupa as groupa,
        student.num_report_card as num_report_card,
        zach.date,
        zach.score,
        sub.name as sub_name,
		sub.fio as sub_fio
		FROM zach
        LEFT JOIN student ON zach.id_user=student.id_user
		LEFT JOIN sub ON zach.id_sub=sub.id_sub"
    );

    $xls = new PHPExcel();

    // Устанавливаем индекс активного листа
    $xls->setActiveSheetIndex(0);
    // Получаем активный лист
    $sheet = $xls->getActiveSheet();
    // Подписываем лист
    $sheet->setTitle('Зачетная ведомость');

    // Вставляем текст в ячейку A1
    $sheet->setCellValue("A1", 'Зачетная ведомость');
    $sheet->getStyle('A1')->getFill()->setFillType(
        PHPExcel_Style_Fill::FILL_SOLID);
    $sheet->getStyle('A1')->getFill()->getStartColor()->setRGB('EEEEEE');

    // Объединяем ячейки
    $sheet->mergeCells('A1:I1');

    // Выравнивание текста
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(
        PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $header = array("П/П","ФИО СТУДЕНТА","ФАКУЛЬТЕТ","ГРУППА","НОМЕР ЗАЧЕТКИ",
        "ДАТА СДАЧИ","ОЦЕНКА","НАЗВАНИЕ ПРЕДМЕТА","ФИО ПРЕПОДАВАТЕЛЯ");

    $a = 0;

    foreach ($header as $h){
        $sheet->setCellValueByColumnAndRow(
            $a,
            2,
            $h
        );

        // Применяем выравнивание
        $sheet->getColumnDimensionByColumn($a)->setAutoSize(true);

        $a++;
    }

    if ($result){
        $r = 3;

        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $a = 0;

            $sheet->setCellValueByColumnAndRow(
                $a,
                $r,
                $r-2
            );

            $a++;

            foreach ($row as $cell){
                $sheet->setCellValueByColumnAndRow(
                    $a,
                    $r,
                    $cell
                );
                

                $a++;
            }

            $r++;
        }
    }

    header ( "Content-type: application/vnd.ms-excel" );
    header("Content-Disposition: attachment;filename=Vedom.xls");
    header("Content-Transfer-Encoding: binary ");

    $objWriter = new PHPExcel_Writer_Excel5($xls);
    $objWriter->save('php://output');
?>
