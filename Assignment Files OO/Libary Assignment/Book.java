import java.util.ArrayList;
import java.util.Iterator;

/**
 * This class maintains the information related to
 * the books which are added and used within the libary.
 * 
 * Gareth Weston - 1401501
 */

class Book
{
    // The fields.
    public ArrayList<String> details;
    public int uniqueId;
    
    /**
     * Set the author, title and book Id fields when this object
     * is constructed.
     */
    public Book()
    {
        details = new ArrayList<String>();
    }
    
    public void storeBookDetails(String detail)
    {
        details.add(detail);
        
    }
    
    //Shows all books within the Arraylist simple version.
    public void showBooks()
    {
        for (String detail : details)
        {
         System.out.println(detail);   
        }
    }
    
    //Shows total Number of books in the Arraylist.
    public int numberOfBooks()
    {
        return details.size();    
    }
    
    //Prints requested book ID number.
    public void printBookDetails(int bookId)
    {
        if (bookId < 0)
        {
            System.out.println("Sorry we have no records to show");    
        }
        
        else if (bookId < numberOfBooks())
        {
            System.out.println("Book Id: " + bookId + " " + details.get(bookId));
            bookId = uniqueId;
        }
        
        else
        {
        
        }    
    
    }   
    
    
    public void printAllBooks()
    {
        Iterator<String> books = details.iterator();
            while (books.hasNext())
            {
                System.out.println("Book Id: " + books.next());    
            }
    }
}
