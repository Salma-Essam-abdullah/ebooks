package com.example.demo.Reader;

import com.example.demo.Core.CustomExceotions.ExcelExeptions.EmptyFileException;
import com.example.demo.Core.CustomExceotions.ExcelExeptions.NoFileException;
import com.example.demo.Core.CustomExceotions.ExcelExeptions.WrongStractureException;
import com.example.demo.Entity.AppUser;
import org.apache.poi.ss.usermodel.DataFormatter;
import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;
import org.springframework.http.HttpStatus;
import org.springframework.web.multipart.MultipartFile;
import java.io.IOException;
import java.util.ArrayList;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

//singleton object
public class GetDataFromFile {
    private String regex = "^[a-zA-Z0-9_!#$%&'+/=?`{|}~^-]+(?:\\.[a-zA-Z0-9_!#$%&'+/=?`{|}~^-]+)@[a-zA-Z0-9-]+(?:\\.[a-zA-Z0-9-]+)$";
    private Pattern pattern = Pattern.compile(regex);
    private DataFormatter fmt = new DataFormatter();
    public static GetDataFromFile getInstance=null;
    private GetDataFromFile(){}
    public static GetDataFromFile GetDataFromFileInstance(){
        if (getInstance==null){
            getInstance = new GetDataFromFile();
        }
        return getInstance;
    }
    public ArrayList<AppUser> getListResponseEntity(MultipartFile files) throws IOException {
        HttpStatus status = HttpStatus.OK;
        ArrayList<AppUser> usersList = new ArrayList<>();
        if (files.getContentType()==null){throw new NoFileException();}
        XSSFWorkbook workbook = new XSSFWorkbook(files.getInputStream());
        XSSFSheet worksheet = workbook.getSheetAt(0);
        if(worksheet.getFirstRowNum()!=0){throw new WrongStractureException();}
        if(worksheet.getPhysicalNumberOfRows()==0){ throw new EmptyFileException();}
        for (int index = 0; index < worksheet.getPhysicalNumberOfRows(); index++) {
            if (index > 0) {
                AppUser user = new AppUser();

                XSSFRow row = worksheet.getRow(index);
                try{
                    user.setNameEN(row.getCell(0).getStringCellValue());
                }catch(Exception e){
                    user.setNameEN("def");
                }
                try{
                    user.setDepartment(row.getCell(2).getStringCellValue());
                }catch(Exception e){
                    user.setDepartment("def");
                }
                try{
                    user.setEmail(row.getCell(4).getStringCellValue());
                    Matcher matcher = pattern.matcher(user.getEmail());
                    if (!matcher.matches()) {
                        user.setDefaultEmail();
                    }

                }catch(Exception e){
                    user.setDefaultEmail();
                }
                try{
                    user.setTitle(row.getCell(1).getStringCellValue());
                }catch(Exception e){
                    user.setDepartment("def");
                }
                try{
                    if (row.getCell(5).getNumericCellValue()==1)
                        user.IsDepartmentManager(true);
                }catch(Exception ignored){ }
                try{
                    if (row.getCell(7).getNumericCellValue()==1)
                    user.setCreatore(true);}catch(Exception e){}
                try{
                    if (row.getCell(5).getNumericCellValue()==1)
                        user.IsDepartmentManager(true);
                }catch(Exception ignored){ }
                try {
                    user.setPhone("0020"+fmt.formatCellValue(row.getCell(3)));
                }catch(NumberFormatException e){
                    user.setDefaultPhone();
                }

                usersList.add(user);
            }
        }

        return usersList;
    }

}