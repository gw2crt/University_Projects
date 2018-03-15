/**
 * A class that maintains information on a book.
 * This might form part of a larger application such
 * as a library system, for instance.
 *
 * @author (Insert your name here.)
 * @version (Insert today's date here.)
 */
class Member
{
    // The fields.
    private String first;
    private String last;
    public int id;

    /**
     * Set the author and title fields when this object
     * is constructed.
     */
    public Member(String firstName, String lastName, int uniqueId)
    {
        first = firstName;
        last = lastName;
        id = uniqueId;
    }

    // Add the methods here ...
}
